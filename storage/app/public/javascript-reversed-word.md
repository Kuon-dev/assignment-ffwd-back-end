# JavaScript Reversed Word

In this tutorial, we'll explore how to reverse a word using JavaScript. Reversing a word means changing its order of characters from the last character to the first character.

## Approach

To reverse a word, we can use the following approach:

1. Convert the word into an array of characters using the `split()` method.
2. Use the `reverse()` method to reverse the order of elements in the array.
3. Convert the reversed array back into a string using the `join()` method.

Here's the JavaScript code that demonstrates this approach:

```javascript
function reverseWord(word) {
  // Convert the word into an array of characters
  const characters = word.split('');

  // Reverse the order of elements in the array
  const reversedCharacters = characters.reverse();

  // Convert the reversed array back into a string
  const reversedWord = reversedCharacters.join('');

  return reversedWord;
}

// Example usage
const word = 'JavaScript';
const reversed = reverseWord(word);
console.log(reversed); // Output: tpircSavaJ
