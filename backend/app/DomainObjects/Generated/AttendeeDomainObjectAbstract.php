<?php

namespace HiEvents\DomainObjects\Generated;

/**
 * THIS FILE IS AUTOGENERATED - DO NOT EDIT IT DIRECTLY.
 * @package HiEvents\DomainObjects\Generated
 */
abstract class AttendeeDomainObjectAbstract extends \HiEvents\DomainObjects\AbstractDomainObject
{
    final public const SINGULAR_NAME = 'attendee';
    final public const PLURAL_NAME = 'attendees';
    final public const ID = 'id';
    final public const ORDER_ID = 'order_id';
    final public const TICKET_ID = 'ticket_id';
    final public const EVENT_ID = 'event_id';
    final public const TICKET_PRICE_ID = 'ticket_price_id';
    final public const SHORT_ID = 'short_id';
    final public const FIRST_NAME = 'first_name';
    final public const LAST_NAME = 'last_name';
    final public const EMAIL = 'email';
    final public const PUBLIC_ID = 'public_id';
    final public const STATUS = 'status';
    final public const CREATED_AT = 'created_at';
    final public const UPDATED_AT = 'updated_at';
    final public const DELETED_AT = 'deleted_at';
    final public const LOCALE = 'locale';

    protected int $id;
    protected int $order_id;
    protected int $ticket_id;
    protected int $event_id;
    protected int $ticket_price_id;
    protected string $short_id;
    protected string $first_name = '';
    protected string $last_name = '';
    protected string $email;
    protected string $public_id;
    protected string $status;
    protected string $created_at;
    protected string $updated_at;
    protected ?string $deleted_at = null;
    protected string $locale = 'en';

    public function toArray(): array
    {
        return [
                    'id' => $this->id ?? null,
                    'order_id' => $this->order_id ?? null,
                    'ticket_id' => $this->ticket_id ?? null,
                    'event_id' => $this->event_id ?? null,
                    'ticket_price_id' => $this->ticket_price_id ?? null,
                    'short_id' => $this->short_id ?? null,
                    'first_name' => $this->first_name ?? null,
                    'last_name' => $this->last_name ?? null,
                    'email' => $this->email ?? null,
                    'public_id' => $this->public_id ?? null,
                    'status' => $this->status ?? null,
                    'created_at' => $this->created_at ?? null,
                    'updated_at' => $this->updated_at ?? null,
                    'deleted_at' => $this->deleted_at ?? null,
                    'locale' => $this->locale ?? null,
                ];
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setOrderId(int $order_id): self
    {
        $this->order_id = $order_id;
        return $this;
    }

    public function getOrderId(): int
    {
        return $this->order_id;
    }

    public function setTicketId(int $ticket_id): self
    {
        $this->ticket_id = $ticket_id;
        return $this;
    }

    public function getTicketId(): int
    {
        return $this->ticket_id;
    }

    public function setEventId(int $event_id): self
    {
        $this->event_id = $event_id;
        return $this;
    }

    public function getEventId(): int
    {
        return $this->event_id;
    }

    public function setTicketPriceId(int $ticket_price_id): self
    {
        $this->ticket_price_id = $ticket_price_id;
        return $this;
    }

    public function getTicketPriceId(): int
    {
        return $this->ticket_price_id;
    }

    public function setShortId(string $short_id): self
    {
        $this->short_id = $short_id;
        return $this;
    }

    public function getShortId(): string
    {
        return $this->short_id;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setPublicId(string $public_id): self
    {
        $this->public_id = $public_id;
        return $this;
    }

    public function getPublicId(): string
    {
        return $this->public_id;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setUpdatedAt(string $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setDeletedAt(?string $deleted_at): self
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deleted_at;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }
}
