async function getData(){
    let response = await fetch ('https://thatsthespir.it/api');
    let data = await response.json()
    return data;
}

getData()
    .then ((data )=> {
        document.getElementById('img').src = (data.photo);
        document.getElementById('quote').innerHTML = (data.quote);
        document.getElementById('author').innerHTML = "-- " + (data.author);
        document.getElementById('nbrquote').innerHTML = (data.total_quotes);
    } )

    .catch((err) => {
        console.error('Erreur !');
        console.dir(err);
    });
