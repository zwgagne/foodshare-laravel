"use strict"

function onClick(href) {
    fetch(href, {
      headers: {
        "X-CSRF-TOKEN": f37b40319956a02fef274656bbfbfb11
      },
      method: 'DELETE',
    })
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log('data', data.id);
      document.getElementById('post-' + data.id).remove();
    })
    .catch(error => {
      console.log('error', error)
    })
  
}
