const links = [...document.querySelectorAll('.nav_link')],
    pages = [...document.querySelectorAll('.home')],
    course = [...document.querySelectorAll('.course__js')],
    courseJugut = [...document.querySelectorAll('.course__jugut')],
    courseAlert = [...document.querySelectorAll('.course__alert')],
    courseFront = document.querySelector('.course__front'),
    courseAlohida = document.querySelector('.course__alohida'),
    form = document.querySelector('.form'),
    wrapperItem = document.querySelector('.wrapper__item'),
    iks = [...document.querySelectorAll('.course__alert_info_exit')],
    comand__pic = [...document.querySelectorAll('.comand__pic')],
    comandPuple = [...document.querySelectorAll('.comand__puple')],
    formLinks = [...document.querySelectorAll('.course__alert_btn')]
    







for(let i = 0; i < links.length; i++) {

    links[i].addEventListener('click', () => {
        pages.forEach( key=> {
            key.classList.remove('active')
        })
        pages[i+1].classList.add('active')
    
    })
}

if(courseAlohida){
    courseAlohida.addEventListener('click', ()=> {
        courseFront.classList.add('active')
    })

}

for(let i = 0; i < course.length; i++) {
    course[i].addEventListener('click', ()=> {
        courseJugut[i].classList.add('active')
    })
}

iks.forEach(key=> {
    key.addEventListener('click', ()=> {
        courseAlert.forEach(key=> {
            key.classList.remove('active')
        })
        form.classList.remove('active')
        wrapperItem.style.opacity = '1'
        comandPuple.forEach(key=> {
            key.classList.remove('active')
        })

    })

})
formLinks.forEach(key=> {

    key.addEventListener('click', ()=> {
        form.classList.add('active')
        wrapperItem.style.opacity = '0.1'
        })

})

comand__pic.forEach((key, index) => {
    key.addEventListener('click', ()=> {
        comandPuple[index].classList.add('active')
    })
})





