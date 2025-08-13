<button class="{{ $class ?? 'btn btn-primary' }}" type="{{ $type ?? 'button' }}" {{ $attributes }}>
    {{ $slot }}
</button>

<style>
    .btn {
        padding: 12px 24px;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-block;
        text-align: center;
        font-family: inherit;
        font-size: 1rem;
    }

    .btn-primary {
        background-color: var(--primary-blue);
        color: var(--white);
    }

    .btn-primary:hover {
        background-color: var(--dark-blue);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .btn-secondary {
        background-color: var(--bright-green);
        color: var(--dark-blue);
    }

    .btn-secondary:hover {
        background-color: var(--light-green);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .btn-danger {
        background-color: #dc3545;
        color: var(--white);
    }

    .btn-danger:hover {
        background-color: #c82333;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);
    }

    .btn-outline {
        background-color: transparent;
        border: 2px solid var(--primary-blue);
        color: var(--primary-blue);
    }

    .btn-outline:hover {
        background-color: var(--primary-blue);
        color: var(--white);
        transform: translateY(-2px);
    }

    .btn-small {
        padding: 8px 16px;
        font-size: 0.9rem;
    }

    .btn-large {
        padding: 16px 32px;
        font-size: 1.1rem;
    }

    .btn-full {
        width: 100%;
    }

    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none !important;
    }

    .btn:disabled:hover {
        transform: none !important;
        box-shadow: none !important;
    }
</style>
