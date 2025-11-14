<?php

declare(strict_types=1);

namespace Src\Reservations\Domain\Entities;

use Src\Shared\Domain\ValueObjects\Identifier;
use Src\Reservations\Domain\ValueObjects\ReservationSource;
use Src\Reservations\Domain\ValueObjects\ReservationCreationDate;

final class ReadReservation
{
    private Identifier $id;
    private ReservationSource $source;
    private Identifier $userId;
    private ReservationCreationDate $createdAt;

    public function __construct(
        Identifier $id,
        ReservationSource $source,
        Identifier $userId,
        ReservationCreationDate $createdAt
    ) {
        $this->id        = $id;
        $this->source    = $source;
        $this->userId    = $userId;
        $this->createdAt = $createdAt;
    }

    // GETTERS
    public function getId(): Identifier { return $this->id; }
    public function getSource(): ReservationSource { return $this->source; }
    public function getUserId(): Identifier { return $this->userId; }
    public function getCreatedAt(): ReservationCreationDate { return $this->createdAt; }

    // ARRAY EXPORT
    public function toArray(): array
    {
        return [
            'reservation_id'       => $this->id->getValue(),
            'reservation_source'   => $this->source->getValue(),
            'reservation_user_id'  => $this->userId->getValue(),
            'reservation_created_at' => $this->createdAt->getValue(),
        ];
    }
}
