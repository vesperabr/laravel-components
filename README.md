# A set of useful Laravel components
The `vesperabr/laravel-components` package add a set of useful components to your Laravel app.

## Installation
You can install the package via composer:

```bash
$ composer require vesperabr/laravel-components
```

The package will automatically register itself.

## Components
- [Form](#form)
- [Input](#input)
- [Label](#label)

### Form
```html
<x-form>
    ...
</x-form>
```

#### Attributes
| Name      | Default | Notes                                                        |
| --------- | ------- | ------------------------------------------------------------ |
| method    | POST    |                                                              |
| multipart |         | If present, control the form enctype to support file uploads |
| bind      |         | Define the values that will be binded                        |
| bag       | default | Define the error bag name                                    |

--------------------------------------------------

### Input
```html
<x-input label="Nome" name="nome" required />
```

| Name        | Default                     | Notes                                                                 |
| ----------- | --------------------------- | --------------------------------------------------------------------- |
| label       |                             |                                                                       |
| type        | text                        |                                                                       |
| name        |                             |                                                                       |
| id          | name attribute (if present) |                                                                       |
| prepend     |                             |                                                                       |
| append      |                             |                                                                       |
| show-errors |                             | If present, show the validation errors                                |
| bag         |                             | Define the error bag name                                             |
| bind        |                             | Override the bind values for the current input                        |
| value       |                             | If provided, it will take precedence over the binded value            |

--------------------------------------------------

### Label
```html
<x-label required>
    Nome
</x-label>
```

#### Attributes
| Name     | Default | Options | Notes                                |
| -------- | ------- | ------- | ------------------------------------ |
| required |         |         | If present, show an * after the text |

--------------------------------------------------

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits
- [Ricardo Monteiro](https://github.com/ricazao)

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
