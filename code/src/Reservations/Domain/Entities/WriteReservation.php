<?php

declare(strict_types=1);

namespace Src\Reservations\Domain\Entities;

use Src\Shared\Domain\ValueObjects\Identifier;
use Src\Reservations\Domain\ValueObjects\ReservationStartDate;
use Src\Reservations\Domain\ValueObjects\ReservationEndDate;
use Src\Reservations\Domain\ValueObjects\ReservationSource;
use Src\Reservations\Domain\ValueObjects\ReservationCreationDate;

final class WriteReservation
{
    private Identifier $id;
    private ReservationStartDate $startDate;
    private ReservationEndDate $endDate;
    private ReservationSource $source;
    private Identifier $userId;
    private ReservationCreationDate $createdAt;

    public function __construct(
        Identifier $id,
        ReservationStartDate $startDate,
        ReservationEndDate $endDate,
        ReservationSource $source,
        Identifier $userId,
        ReservationCreationDate $createdAt
    ) {
        $this->id        = $id;
        $this->startDate = $startDate;
        $this->endDate   = $endDate;
        $this->source    = $source;
        $this->userId    = $userId;
        $this->createdAt = $createdAt;
    }

    // GETTERS
    public function getId(): Identifier { return $this->id; }
    public function getStartDate(): ReservationStartDate { return $this->startDate; }
    public function getEndDate(): ReservationEndDate { return $this->endDate; }
    public function getSource(): ReservationSource { return $this->source; }
    public function getUserId(): Identifier { return $this->userId; }
    public function getCreatedAt(): ReservationCreationDate { return $this->createdAt; }

    // SETTERS
    public function setId(Identifier $id): void { $this->id = $id; }
    public function setStartDate(ReservationStartDate $start): void { $this->startDate = $start; }
    public function setEndDate(ReservationEndDate $end): void { $this->endDate = $end; }
    public function setSource(ReservationSource $source): void { $this->source = $source; }
    public function setUserId(Identifier $userId): void { $this->userId = $userId; }
    public function setCreatedAt(ReservationCreationDate $createdAt): void { $this->createdAt = $createdAt; }
}
