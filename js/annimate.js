function annimateLogin(){
    let tl=gsap.timeline({defaults:{duration:0.2 ,ease:"power3.out"} })
    tl.fromTo('.wrapper',{y:500},{y:0,rotation:0.01,speed:2})
}