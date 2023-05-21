# Ruby Regular Expressions

Regular expressions (regex) are powerful patterns used to match and manipulate text. Ruby provides built-in support for regular expressions through the `Regexp` class. In this tutorial, we'll explore the basics of working with regular expressions in Ruby.

## Creating a Regular Expression

To create a regular expression in Ruby, you can use the forward slash `/` delimiter. For example, `/pattern/` represents a regular expression pattern.

```ruby
pattern = /hello/
```

In the example above, we create a regular expression pattern that matches the word "hello".

## Matching Patterns

You can use regular expressions to match patterns within a string using the `match` method. This method returns a `MatchData` object if the pattern is found, or `nil` if no match is found.

```ruby
pattern = /hello/
result = pattern.match("hello, world!")

puts result # Output: #<MatchData "hello">
```

In the example above, we match the pattern `/hello/` against the string "hello, world!". The `match` method returns a `MatchData` object that contains the matched substring.

## Regex Metacharacters

Regular expressions support metacharacters that have special meanings. Here are some commonly used metacharacters in Ruby:

- `.` matches any character except a newline.
- `*` matches zero or more occurrences of the preceding character or group.
- `+` matches one or more occurrences of the preceding character or group.
- `?` matches zero or one occurrence of the preceding character or group.
- `[]` matches any single character within the brackets.
- `^` matches the start of a line or string.
- `$` matches the end of a line or string.
- ``b` matches a word boundary.

These metacharacters provide powerful pattern matching capabilities in regular expressions.

## Regex Methods

In addition to the `match` method, the `Regexp` class provides other methods to work with regular expressions in Ruby:

- `=~` operator: Tests whether a string matches a regular expression pattern and returns the index of the first match or `nil`.
- `scan` method: Returns an array of all matches of a pattern within a string.
- `sub` method: Replaces the first occurrence of a pattern in a string with a replacement string.
- `gsub` method: Replaces all occurrences of a pattern in a string with a replacement string.

These methods offer different ways to work with regular expressions and perform operations on strings.

## Conclusion

Regular expressions are a powerful tool for pattern matching and text manipulation in Ruby. By understanding the basics of creating regular expressions, matching patterns, using metacharacters, and utilizing regex methods, you can effectively work with textual data and perform complex string operations in your Ruby programs.
