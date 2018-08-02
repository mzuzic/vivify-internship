var promise = new Promise((resolve, reject) => {
    var request = new XMLHttpRequest();
  
    request.open('GET', 'https://api.icndb.com/jokes/random');
    request.onload = () => {
      if (request.status === 200) {
        resolve(request.response);
      } else {
        reject(Error(request.statusText)); 
      }
    };
  
    request.onerror = () => {
      reject(Error('Error fetching data.')); 
    };
  
    request.send(); 
  });
  

  
  promise.then((data) => {
    console.log('Got data');
    document.body.textContent = JSON.parse(data).value.joke;
  }, (error) => {
    console.log('Promise rejected.');
    console.log(error.message);
  });
  