console.log("In my script")

const other=document.getElementById('other');
const marriage=document.getElementById('marital');
const single=document.getElementById('single');

const othernation=document.getElementById('othernation');
const mm=document.getElementById('mm');

const othergender=document.getElementById('othergender');
const male=document.getElementById('male');
const female=document.getElementById('female');

other.onclick=checkMarital;
marriage.onclick=checkMarital;
single.onclick=checkMarital;

othernation.onclick=checkNation;
mm.onclick=checkNation;

othergender.onclick=checkGender;
male.onclick=checkGender;
female.onclick=checkGender;


function checkMarital()
{
    console.log(this.value)
    const text_other=document.getElementById('other_marital');
    if(this.value=="other")
    {
        text_other.classList.remove('d-none')
        text_other.classList.add('d-block')
    }
    else
    {
        text_other.classList.remove('d-block')
        text_other.classList.add('d-none')
    }
}

function checkNation()
{
    console.log(this.value)
    const text_nation=document.getElementById('other_nation');
    if(this.value=="other")
    {
        text_nation.classList.remove('d-none')
        text_nation.classList.add('d-block')
    }
    else
    {
        text_nation.classList.remove('d-block')
        text_nation.classList.add('d-none')
    }
}

function checkGender()
{
    console.log(this.value)
    const text_gender=document.getElementById('other_gender');
    if(this.value=="other")
    {
        text_gender.classList.remove('d-none')
        text_gender.classList.add('d-block')
    }
    else
    {
        text_gender.classList.remove('d-block')
        text_gender.classList.add('d-none')
    }
}

console.log("hi")
var register = document.getElementById('register');
var submit2=document.getElementById('submit2');
var submit3=document.getElementById('submit3');
var submit4=document.getElementById('submit4');
var row1=document.getElementById('row1');
var row2=document.getElementById('row2');
var row3=document.getElementById('row3');
var row4=document.getElementById('row4');
var progress1=document.getElementById('progress1');
var progress2=document.getElementById('progress2');
var progress3=document.getElementById('progress3');

register.onclick=function(e){
    e.preventDefault();

    row1.style.display="none";
    row2.style.display="block";
    row3.style.display="none";
    row4.style.display="none";
    progress1.classList.add('active');
    progress.classList.remove('active');
}

submit2.onclick=function(e){
    e.preventDefault();

    row1.style.display="none";
    row2.style.display="none";
    row3.style.display="block";
    row4.style.display="none";
    progress2.classList.add('active');
    progress1.classList.remove('active');
}

submit3.onclick=function(e){
    e.preventDefault();

    row1.style.display="none";
    row2.style.display="none";
    row3.style.display="none";
    row4.style.display="block";
    progress3.classList.add('active');
    progress2.classList.remove('active');
}