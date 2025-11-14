<?php

declare(strict_types=1);

namespace Src\Reservations\Domain\Entities;

use Src\Shared\Domain\ValueObjects\Identifier;
use Src\Reservations\Domain\ValueObjects\ReservationStartDate;
use Src\Reservations\Domain\ValueObjects\ReservationEndDate;
use Src\Reservations\Domain\ValueObjects\ReservationSource;
use Src\Reservations\Domain\ValueObjects\ReservationCreationDate;

final class ReadReservation
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

    // ARRAY EXPORT
    public function toArray(): array
    {
        return [
            'reservation_id'       => $this->id->getValue(),
            'reservation_start'    => $this->startDate->getValue(),
            'reservation_end'      => $this->endDate->getValue(),
            'reservation_source'   => $this->source->getValue(),
            'reservation_user_id'  => $this->userId->getValue(),
            'reservation_created_at' => $this->createdAt->getValue(),
        ];
    }
}
