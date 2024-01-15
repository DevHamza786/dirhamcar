let mainbranch = document.getElementById('mainBranch')
let subbranch = document.getElementById('subBranch')
let over = document.getElementById('over-hidden')
let over2 = document.getElementById('over-hidden2')
let mainBranchBtn = document.getElementById('mainBranchBtn')
let subBranchBtn = document.getElementById('subBranchBtn')


mainbranch.style.display = 'block'
over.style.display = 'block'
mainBranchBtn.classList.add('branch-btn-active')

function showBranches(id){
    if(id == 1){
        subbranch.style.display = 'none'
        over2.style.display = 'none'
        subBranchBtn.classList.remove('branch-btn-active')
        mainBranchBtn.classList.add('branch-btn-active')
        mainbranch.style.display = 'block'
        over.style.display = 'block'
    }else{
        mainBranchBtn.classList.remove('branch-btn-active')
        over.style.display = 'none'
        mainbranch.style.display = 'none'
        subBranchBtn.classList.add('branch-btn-active')
        over2.style.display = 'block'
        subbranch.style.display = 'block'
    }
}