export function arrayFiltering(array, test) {
  const result = [];
  for (const item of array) {
    if (test(item)) result.push(item);
  }
  return result;
}

console.log(arrayFiltering([1, 2, 3, 4], (x) => x > 2));
