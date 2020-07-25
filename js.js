const form = document.getElementById('frm');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const _ = id => (document.getElementById(id))
  const formData = new FormData();
  formData.append('firstName','firstName' );
  formData.append('lastName', _('lastName').value);
  formData.append('age', _('age').value);
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    const rsp = document.getElementById('response');
    rsp.innerHTML = '...Loading'
    if(xhr.status === 200 && xhr.readyState === 4) {
      setTimeout(() => {
        rsp.innerHTML = xhr.response
      }, 2000);
      console.log(xhr.response)
    }
  }
  xhr.open('POST', 'http://localhost/test/global.php', true);
  xhr.send(formData);
})