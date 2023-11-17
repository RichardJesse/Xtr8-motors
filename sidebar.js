const hamburgerIcon = document.querySelector('.hambuger-icon');
hamburgerIcon.addEventListener('click', () => {
    sidebarscroll()
});

function sidebarscroll(){
    const vehiclecontent = document.querySelector('.vehicle-contentpage');
    const linkcontainer = document.getElementById('active');
    const link = document.querySelectorAll('.sidebarlink');
    const sidebar = document.querySelector('.sidebar');
   







    if (sidebar.style.width === '180px') {
        sidebar.style.width = '0';
        vehiclecontent.style.left = '0';
        link.forEach(link => {
            link.style.opacity = '0';
        });
    } else {
        sidebar.style.width = '180px';
        vehiclecontent.style.left = '182px';
        link.forEach(link => {
            link.style.opacity = '1';
        });
    }



}