# Ruby Date and Time

In Ruby, the `Date` and `Time` classes are provided by the standard library to work with dates and times. These classes offer various methods to manipulate, format, and perform calculations on dates and times.

## Date

The `Date` class allows you to work with dates, including parsing, formatting, and performing arithmetic operations.

### Creating a Date

You can create a `Date` object using the `Date.new` method or by parsing a string representation of a date using `Date.parse`.

```ruby
require 'date'

# Creating a Date object using Date.new
date = Date.new(2023, 5, 15)
puts date  # Output: 2023-05-15

# Parsing a date string using Date.parse
date = Date.parse("2023-05-15")
puts date  # Output: 2023-05-15
```

In the example above, we create a `Date` object representing May 15, 2023, using both the `Date.new` method and `Date.parse` to parse a string representation.

### Formatting a Date

You can format a `Date` object using the `strftime` method, which stands for "string format time." It allows you to specify a format string to represent the date in a desired format.

```ruby
date = Date.new(2023, 5, 15)

puts date.strftime("%Y-%m-%d")  # Output: 2023-05-15
puts date.strftime("%B %d, %Y")  # Output: May 15, 2023
puts date.strftime("%A")  # Output: Monday
```

In the example above, we format the `Date` object using different format codes. `%Y` represents the year, `%m` represents the month, `%d` represents the day, `%B` represents the full month name, and `%A` represents the full weekday name.

### Performing Date Arithmetic

The `Date` class allows you to perform arithmetic operations on dates, such as adding or subtracting days, months, or years.

```ruby
date = Date.new(2023, 5, 15)

# Adding days
new_date = date + 7
puts new_date  # Output: 2023-05-22

# Subtracting months
new_date = date.prev_month(3)
puts new_date  # Output: 2023-02-15

# Adding years
new_date = date.next_year(2)
puts new_date  # Output: 2025-05-15
```

In the example above, we demonstrate how to perform date arithmetic by adding days, subtracting months, and adding years using the appropriate methods provided by the `Date` class.

## Time

The `Time` class in Ruby allows you to work with time, including parsing, formatting, and performing calculations similar to the `Date` class.

### Creating a Time

You can create a `Time` object using the `Time.new` method or by parsing a string representation of time using `Time.parse`.

```ruby
require 'time'

# Creating a Time object using Time.new
time = Time.new(2023, 5, 15, 10, 30, 0)
puts time  # Output: 2023-05-15 10:30:00 +0530

# Parsing a time string using Time.parse
time = Time.parse("2023-05-15 10:30:00")
puts time  # Output: 202
