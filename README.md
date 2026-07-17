# Money Asaas

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yurisouzadev/money-asaas.svg?style=flat-square)](https://packagist.org/packages/yurisouzadev/money-asaas)
[![Tests](https://github.com/YuriSouzaDev/money-asaas/actions/workflows/tests.yml/badge.svg?branch=dev)](https://github.com/YuriSouzaDev/money-asaas/actions/workflows/tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/yurisouzadev/money-asaas.svg?style=flat-square)](https://packagist.org/packages/yurisouzadev/money-asaas)

> **🚧 Work in Progress** — a API abaixo é o contrato de design do pacote e guia o desenvolvimento (README Driven Development). Nem tudo já está implementado. Acompanhe o progresso nas [milestones](../../milestones).

Money Asaas é uma camada de billing para Laravel sobre o [Asaas](https://www.asaas.com), no estilo do [Laravel Cashier](https://laravel.com/docs/billing) — não um wrapper fino da API.

## Por que não é "mais um SDK do Asaas"?

Já existem várias bibliotecas PHP que espelham a API do Asaas endpoint a endpoint (`->customer()->create()`, `->payment()->getById()`). Elas funcionam, mas deixam pra você resolver, na aplicação, tudo que envolve **billing de verdade**: sincronizar status de assinatura com o seu `User`, tratar webhooks, calcular parcelas e multa, versionar planos.

O Money Asaas assume essa camada. Ele se integra ao Eloquent (trait no seu `User`/`Model` de cobrança), expõe uma API fluente para cobranças e assinaturas, e trata os webhooks do Asaas para manter o estado sincronizado automaticamente — do mesmo jeito que o Cashier faz para Stripe/Paddle.

| | SDKs wrapper existentes | Money Asaas |
|---|---|---|
| Modelo mental | Chamada de API | Billing (assinaturas, cobranças, planos) |
| Integração com Eloquent | Manual | Trait pronta (`Billable`) |
| Webhooks | Você implementa | Tratados pelo pacote |
| Parcelamento/multa/juros | Monta o payload à mão | API fluente |

## Instalação

```bash
composer require yurisouzadev/money-asaas
```

```bash
php artisan vendor:publish --tag="money-asaas-migrations"
php artisan migrate
```

```bash
php artisan vendor:publish --tag="money-asaas-config"
```

## Uso

Adicione a trait `Billable` ao seu model de cobrança:

```php
use Moneyasaas\MoneyAsaas\Billable;

class User extends Authenticatable
{
    use Billable;
}
```

### Cobrança avulsa

```php
$user->charge(150.00)
    ->billingType()->pix()
    ->installments(3)
    ->fine(2.0)
    ->interest(1.0)
    ->create();
```

### Assinatura recorrente

```php
$user->newSubscription('plano-mensal', 'price_xxx')
    ->billingType()->creditCard()
    ->monthly()
    ->create();
```

> Os exemplos acima descrevem a API alvo do v1. Consulte as [issues `feat`](../../issues?q=is%3Aissue+label%3Afeat) para o status de cada método.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Yuri Souza](https://github.com/YuriSouzaDev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
