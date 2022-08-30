$listMenu = document.querySelectorAll('.menu');


for($menu of $listMenu)
{   
    $menu.addEventListener('click', function()
    {   
        for($menu of $listMenu)
        {
            $menu.classList.remove('menu-active');
        }
        var $this = this;   
        $this.classList.add('menu-active')
    });
        
}

/*Cách Khác để xóa và add active

// document.querySelector('.menu-CC').addEventListener('click',()=>{
//     for($menu of $listMenu)
//     {
//         $menu.classList.remove('menu-active');
//     }
//     document.querySelector('.menu-CC').classList.add("menu-active");
// });

// document.querySelector('.menu-BT').addEventListener('click',()=>{
//     for($menu of $listMenu)
//     {
//         $menu.classList.remove('menu-active');
//     }
//     document.querySelector('.menu-BT').classList.add("menu-active");
// });

// document.querySelector('.menu-NP').addEventListener('click',()=>{
//     for($menu of $listMenu)
//     {
//         $menu.classList.remove('menu-active');
//     }
//     document.querySelector('.menu-NP').classList.add("menu-active");
// });

// document.querySelector('.menu-NH').addEventListener('click',()=>{
//     for($menu of $listMenu)
//     {
//         $menu.classList.remove('menu-active');
//     }
//     document.querySelector('.menu-NH').classList.add("menu-active");
// });

// document.querySelector('.menu-NTVP').addEventListener('click',()=>{
//     for($menu of $listMenu)
//     {
//         $menu.classList.remove('menu-active');
//     }
//     document.querySelector('.menu-NTVP').classList.add("menu-active");
// });

// document.querySelector('.menu-NTCF').addEventListener('click',()=>{
//     for($menu of $listMenu)
//     {
//         $menu.classList.remove('menu-active');
//     }
//     document.querySelector('.menu-NTCF').classList.add("menu-active");
// });

 */

/*Show Project */


