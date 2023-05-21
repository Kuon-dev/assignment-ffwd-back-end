# Python Regular Expressions

Regular expressions (regex) are powerful tools for pattern matching and string manipulation. They allow you to search, match, and manipulate text based on specific patterns. Python provides a built-in module called `re` for working with regular expressions. In this tutorial, we'll explore the basics of using regular expressions in Python.

## Creating a Regular Expression Pattern

To work with regular expressions in Python, you need to define a pattern using special syntax. Here's an example of creating a basic regular expression pattern:

```python
import re

pattern = r"ab+c"

In this example, we import the `re` module and define a pattern `ab+c`. The `r` prefix before the pattern string denotes a raw string, which is recommended when working with regular expressions.

## Matching Patterns

Once you have a pattern, you can use various functions from the `re` module to match the pattern against a string. The most commonly used function is `re.match()`, which checks if the pattern matches at the beginning of the string. Here's an example:

```python
import re

pattern = r"ab+c"
string = "abc"

match = re.match(pattern, string)
if match:
    print("Match found!")
else:
    print("No match.")

In this example, the pattern `ab+c` is matched against the string `abc`, and since the pattern is found at the beginning of the string, a match is found.

## Searching for Patterns

In addition to `re.match()`, you can also use the `re.search()` function to search for a pattern anywhere within a string. Here's an example:

```python
import re

pattern = r"ab+c"
string = "def abbc ghi"

match = re.search(pattern, string)
if match:
    print("Match found!")
else:
    print("No match.")

In this example, the pattern `ab+c` is searched within the string `def abbc ghi`, and since the pattern is found, a match is found.

## Extracting Matches

To extract the matched pattern or specific parts of it, you can use the `group()` method of the match object. Here's an example:

```python
import re

pattern = r"ab(.+)c"
string = "def ab123c ghi"

match = re.search(pattern, string)
if match:
    matched_text = match.group(0)
    captured_group = match.group(1)
    print("Matched Text:", matched_text)
    print("Captured Group:", captured_group)
else:
    print("No match.")

In this example, the pattern `ab(.+)c` is used to match the string `def ab123c ghi`. The `group(0)` method returns the entire matched text, while `group(1)` returns the content captured by the parentheses.

## Pattern Modifiers and Flags

Python's regular expressions support various modifiers and flags to enhance pattern matching. For example, you can use the `re.IGNORECASE` flag to perform case-insensitive matching. Here's an example:

```python
import re

pattern = r"python"
string = "Python is awesome!"

match = re.search(pattern, string, re.IGNORECASE)
if match:
    print("Match found!")
else:
    print("No match.")

In this example, the pattern `python` is matched against the string `Python is awesome!` using the `re.IGNORECASE` flag. Since the flag is specified, case-insensitive matching is performed, and a match is found.

## Conclusion

Regular expressions are a powerful tool for pattern matching and text manipulation in Python.
