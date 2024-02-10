//connecting the header
fetch('include/header.html')
            .then(response => response.text())
            .then(data => {
                document.querySelector('nav').innerHTML = data;
});