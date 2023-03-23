<?php

namespace Behavioral\Strategy;

use Behavioral\Entity\User;
use Exception;

class SalaryManager
{
    private SalaryStrategyInterface $salaryStrategy;

    public function __construct(
        private array $period,
        private array $users
    ) {
    }

    /**
     * @throws Exception
     */
    public function handle(): array
    {
        $usersSalary = $this->calculateSalary();

        if (!$this->saveSalary($usersSalary)) {
            throw new Exception('Ошибка при сохранение зарплаты');
        }

        return $usersSalary;
    }

    /**
     * @throws Exception
     */
    private function calculateSalary(): array
    {
        /** @var User $user */
        return array_map(function ($user) {
            $strategy = $this->getStrategyByUser($user);
            $salary = $this
                ->setCalculateStrategy($strategy)
                ->calculateUserSalary($this->period, $user);

            $strategyName = $strategy->getName();
            $userId = $user->id;
            $userFio = $user->fio;

            return compact('userId', 'userFio', 'salary', 'strategyName');
        }, $this->users);
    }

    /**
     * @throws Exception
     */
    private function getStrategyByUser($user): SalaryStrategyInterface
    {
        $strategyName = ucwords($user->departmentName) . 'Strategy';
        $strategyClass = __NAMESPACE__ . '\\Strategies\\' . ucwords($strategyName);


        if (!class_exists($strategyClass)) {
            throw new Exception("Класс не существует [$strategyClass]");
        }

        return new $strategyClass;
    }

    private function calculateUserSalary($period, $user)
    {
        return $this->salaryStrategy->calc($period, $user);
    }

    private function setCalculateStrategy(SalaryStrategyInterface $strategy): static
    {
        $this->salaryStrategy = $strategy;
        return $this;
    }

    private function saveSalary(array $usersSalary): bool
    {
        // запись в БД, создан для полного понимая процесса
        return true;
    }
}
