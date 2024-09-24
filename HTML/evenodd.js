function checkNumber() {
    const num = parseInt(document.getElementById('numInput').value);
    const result = (num <= 1) ? `${num} is not prime` : (isPrime(num)) ? `${num} is prime` : `${num} is not prime`;
    document.getElementById('result').textContent = result;
  }
  
  function isPrime(n) {
    for (let i = 2; i * i <= n; i++) {
      if (n % i === 0) return false;
    }
    return true;
  }      