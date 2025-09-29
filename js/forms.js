// const form = document.getElementById('form');
// const subscription = document.getElementById('subscription');
// const result = document.getElementById('result');

// form.addEventListener('submit', function(e) {
//   e.preventDefault();
//   const formData = new FormData(form || subscription);
//   const object = Object.fromEntries(formData);
//   const json = JSON.stringify(object);
//   result.innerHTML = "Please wait..."

//     fetch('https://api.web3forms.com/submit', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'Accept': 'application/json'
//             },
//             body: json
//         })
//         .then(async (response) => {
//             let json = await response.json();
//             if (response.status == 200) {
//                 result.innerHTML = json.message;
//             } else {
//                 console.log(response);
//                 result.innerHTML = json.message;
//             }
//         })
//         .catch(error => {
//             console.log(error);
//             result.innerHTML = "Something went wrong!";
//         })
//         .then(function() {
//             form.reset();
//             setTimeout(() => {
//                 result.style.display = "none";
//             }, 3000);
//         });
// });



const forms = [document.getElementById('form'), document.getElementById('subscription')].filter(Boolean);

forms.forEach(form => {
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Get the correct result element based on form ID
    const result = form.id === 'form'
      ? document.getElementById('result')
      : document.getElementById('result1');

    const formData = new FormData(form);
    const object = Object.fromEntries(formData);
    const json = JSON.stringify(object);

    if (result) {
      result.style.display = "block";
      result.innerHTML = "Please wait...";
    }

    fetch('https://api.web3forms.com/submit', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: json
    })
      .then(async (response) => {
        const data = await response.json();
        if (response.ok) {
          if (result) result.innerHTML = data.message;
        } else {
          if (result) result.innerHTML = `Error ${response.status}: ${data.message}`;
        }
      })
      .catch(error => {
        console.error(error);
        if (result) result.innerHTML = "Something went wrong!";
      })
      .finally(() => {
        form.reset();
        if (result) {
          setTimeout(() => {
            result.style.display = "none";
          }, 3000);
        }
      });
  });
});
