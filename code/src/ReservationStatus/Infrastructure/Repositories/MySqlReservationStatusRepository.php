<?php

declare(strict_types=1);

namespace Src\ReservationStatus\Infrastructure\Repositories;

use Src\ReservationStatus\Domain\Entities\ReadReservationStatus;
use Src\ReservationStatus\Domain\Entities\WriteReservationStatus;
use Src\ReservationStatus\Domain\Interfaces\ReservationStatusRepository;
use Src\Shared\Domain\ValueObjects\Identifier;
use Src\Shared\Domain\ValueObjects\TimeStamp;

final class MySqlReservationStatusRepository implements ReservationStatusRepository
{
    public function addReservationStatus(WriteReservationStatus $relation): void {}

    public function updateReservationStatus(WriteReservationStatus $relation): void {}

    public function deleteReservationStatus(
        Identifier $reservationId,
        Identifier $statusId
    ): void {}

    public function getReservationStatuses(): array
    {
        return $this->seed();
    }

    public function getStatusesByReservation(Identifier $reservationId): array
    {
        $result = [];
        foreach ($this->seed() as $item) {
            if ($item->getReservationId()->getValue() === $reservationId->getValue()) {
                $result[] = $item;
            }
        }
        return $result;
    }

    private function seed(): array
    {
        return [
            $this->make('1', '10', '2025-01-02 10:00:00'),
            $this->make('1', '20', '2025-01-03 14:30:00'),
            $this->make('2', '10', '2025-02-01 09:00:00'),
        ];
    }

    private function make(string $reservationId, string $statusId, string $changedAt): ReadReservationStatus
    {
        return new ReadReservationStatus(
            new Identifier($reservationId),
            new Identifier($statusId),
            new TimeStamp($changedAt)
        );
    }
}
