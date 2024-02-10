//connecting the header(nav) in index.html
fetch('include/header.html')
            .then(response => response.text())
            .then(data => {
                document.querySelector('nav').innerHTML = data;
});