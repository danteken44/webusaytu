function navScroll()
{
    let nav = document.getElementById('nav');
    if(window.scrollY >= 100)
    {
        nav.classList.add('navscrolled');
    }else{
        nav.classList.remove('navscrolled')
    }
}


window.addEventListener('scroll', navScroll);


if (window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }

  function bookbtn()
{
    let book = document.getElementById('bookform');
        book.classList.add('bookformactive');
}

function bookformhide()
{
    let book = document.getElementById('bookform');
        book.classList.remove('bookformactive');
}

function booknotlogin(){
    alert('You have to Log In first before booking!');
               setTimeout(function(){
                  window.location.href = 'index.php';
               }, 100);
            
}
               
            
