# Java Date and Time

Working with dates and times is an essential part of many Java applications. The `java.time` package introduced in Java 8 provides comprehensive support for date and time manipulation.

## Date and Time Classes

The `java.time` package includes several classes to represent dates, times, and durations. Here are some of the key classes:

- `LocalDate`: Represents a date without a time component.
- `LocalTime`: Represents a time without a date component.
- `LocalDateTime`: Represents a date and time.
- `ZonedDateTime`: Represents a date, time, and time zone.
- `Duration`: Represents a time-based amount.
- `Period`: Represents a date-based amount.

## Creating Date and Time Objects

You can create instances of date and time objects using various factory methods and constructors provided by the `java.time` classes. Here's an example:

```java
import java.time.LocalDate;
import java.time.LocalTime;
import java.time.LocalDateTime;

LocalDate date = LocalDate.now(); // Current date
LocalTime time = LocalTime.now(); // Current time
LocalDateTime dateTime = LocalDateTime.now(); // Current date and time
```

In the above example, we create instances of `LocalDate`, `LocalTime`, and `LocalDateTime` representing the current date, time, and date-time respectively.

## Manipulating Date and Time

The `java.time` classes provide methods to manipulate dates and times easily. You can perform various operations such as adding or subtracting durations, adjusting dates and times, and extracting specific fields. Here's an example:

```java
import java.time.LocalDate;

LocalDate date = LocalDate.now();
LocalDate nextWeek = date.plusWeeks(1); // Adding a week
LocalDate previousMonth = date.minusMonths(1); // Subtracting a month
int dayOfMonth = date.getDayOfMonth(); // Getting the day of the month
```

In the above example, we manipulate the `LocalDate` object by adding a week, subtracting a month, and retrieving the day of the month.

## Formatting and Parsing

You can format date and time objects into strings and parse strings into date and time objects using the `DateTimeFormatter` class. Here's an example:

```java
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;

LocalDateTime dateTime = LocalDateTime.now();
DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd HH:mm:ss");
String formattedDateTime = dateTime.format(formatter); // Formatting to a string
LocalDateTime parsedDateTime = LocalDateTime.parse("2022-01-01 12:00:00", formatter); // Parsing from a string
```

In the above example, we format a `LocalDateTime` object into a string using a custom pattern, and we parse a string into a `LocalDateTime` object using the same pattern.

## Time Zones

The `ZonedDateTime` class allows you to work with date and time values in different time zones. You can convert between time zones, extract time zone information, and perform calculations across time zones. Here's an example:

```java
import java.time.ZonedDateTime;
import java.time.ZoneId;

ZonedDateTime dateTime = ZonedDateTime.now();
ZoneId zone = ZoneId.of("America/New_York");
ZonedDateTime newYorkDateTime = dateTime.withZoneSameInstant(zone); // Convert to New York time zone
```

In the above example, we convert a `ZonedDateTime` object to the "America/New_York" time zone.


