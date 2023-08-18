# PHPUNITTEST POC

## TECH STACK

- Composer
- Phpunit
- Better PHPunit (extension)-- it is not very useful to me.

## Start

I don't want to gloabally installed phpunit, so I used

```bash
vendor/bin/phpunit
```

or

`ctrl` + `shift` + `p` -> `Better PHPUnit: Run all tests`

### Notes

> Autotest run setting (only for me): `shift` + windows + R

1. We don't want to run the configuaration options individually such as `--color` or `--version`, so we need to set few parameters in the `phpunit.xml` file.
2. [Assertions](https://docs.phpunit.de/en/10.0/assertions.html) are the way to check the expected output of the code. There are many assertions available in PHPUnit. We will use `assertEquals()` to check the expected output.
3. Be ware '--filter', it will run all the tests that match the given pattern. For example, if you have a test named `testOne()` and you run `--filter test`, it will run all the tests that contain the word `test` in their name.
