console.log("In my script")

const other=document.getElementById('other');
const marriage=document.getElementById('marital');
const single=document.getElementById('single');
const name_mm=document.getElementById('name_mm');
const name_eng=document.getElementById('name_eng');

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

name_mm.onblur=checkName;
name_mm.onfocus=checkName;
name_eng.onblur=checkEng;
name_eng.onfocus=focusEng;

function checkName(event)
{
    if(this.classList.contains('focused'))
    {
        if(this.value=='')
        {
            document.getElementById('name_error').innerHTML="Please enter your name in Myanmar"
        }
        this.classList.remove('focused')
        this.classList.add('blurred')
    }
    else
    {
        document.getElementById('name_error').innerHTML=""
        this.classList.remove('blurred')
        this.classList.add('focused')
    }
}   


function checkEng()
{
    if(this.value=='')
    {
        document.getElementById('name_eng_error').innerHTML="Please enter your name in English"
    }
}
function focusEng()
{
    document.getElementById('name_eng_error').innerHTML=""
}


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


    


// console.log(other)
// var marital_status="";
// other.addEventListener('click',function(){
//     marital_status=other.value
//     console.log("marital status : "+marital_status)
//     const text_other=document.getElementById('other_marital');
//     text_other.classList.remove('d-none')
//     text_other.classList.add('d-block')
// })

// marriage.onclick=function(){
//     const text_other=document.getElementById('other_marital');
//     if(text_other.classList.contains('d-block'))
//     {
//         text_other.classList.remove('d-block')
//         text_other.classList.add('d-none')
//     }
// }
// single.onclick=function(){
//     const text_other=document.getElementById('other_marital');
//     if(text_other.classList.contains('d-block'))
//     {
//         text_other.classList.remove('d-block')
//         text_other.classList.add('d-none')
//     }
// }


