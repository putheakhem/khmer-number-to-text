# Khmer Number To Text

Convert Arabic or Khmer digit numbers into **Khmer written text format** (spoken form), suitable for invoices, financial documents, education, and legal reporting in the Khmer language.

---

## 📦 Installation

```bash
composer require putheakhem/khmer-number-to-text
```

> For local development, use a path-based repository in your Laravel project.

---

## 🚀 Features

* ✅ Supports both Arabic (`1234`) and Khmer (`១២៣៤`) digit inputs
* ✅ Outputs proper Khmer number words (e.g., `1234 → មួយពាន់ពីររយសាមសិបប្រាំបួន`)
* ✅ Proper handling of:

    * Single digits (`6 → ប្រាំមួយ`)
    * Tens (`40 → សែសិប`)
    * Hundreds, Thousands, Millions (`1234567 → មួយលានពីររយសាមសិបប្រាំបួន`)
* ✅ Laravel Facade support: `KhmerNumber::toText(1234)`

---

## 🔧 Usage

### Basic Example

```php
use Putheakhem\KhmerNumberToText\Facades\KhmerNumber;

echo KhmerNumber::toText(1234);    // មួយពាន់ពីររយសាមសិបប្រាំបួន
echo KhmerNumber::toText('៦៧៨៩');  // ប្រាំមួយពាន់ប្រាំពីររយប៉ែតសិបប្រាំបួន...
```
### Helper
If you prefer, you can use the global helper function:
```php
echo khmer_number_to_text(2025); // ពីរពាន់ម្ភៃប្រាំ

echo khmer_number_to_text('១២៣៤'); // មួយពាន់ពីររយសាមសិបប្រាំបួន
```

## 📚 Internals

This package relies on:

* `KhmerNumberConstants` — a centralized definition of:

    * Khmer digit word mappings
    * Tens word patterns (e.g., `60 → ហុកសិប`)
    * Large unit labels (`លាន`, `ពាន់`, `រយ`)
* Recursive `convertNumber()` logic to handle number decomposition
* Laravel Facade binding via `KhmerNumber`

---
## 🛠️ Contributing
Contributions are welcome! Please follow these steps:
1. Fork the repository
2. Create a new branch (`git checkout -b feature/YourFeature`)
3. Make your changes
4. Commit your changes (`git commit -m 'Add some feature'`)
5. Push to the branch (`git push origin feature/YourFeature`)
6. Create a new Pull Request
7. Ensure your code adheres to the coding standards and passes all tests

## Security Vulnerabilities

If you discover a security vulnerability within this package, please send an e-mail to puthea.khem at gmail.com. All security vulnerabilities will be promptly addressed.

## 📄 License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

Built with ❤️ by [Puthea khem](mailto:puthea.khem@gmail.com)
