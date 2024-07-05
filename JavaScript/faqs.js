const questions = document.querySelectorAll(".question");

questions.forEach((question)=>{
    // console.log(question);
    const btn = question.querySelector(".question-btn");
    // console.log(btn);
    btn.addEventListener("click", ()=>{
        question.classList.toggle("show-text");
    })
})