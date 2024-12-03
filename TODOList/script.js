const addBtn = document.querySelector('#btn');
const taskCard = document.querySelector('.todoCard');
const taskConteiner = document.querySelector('#todoCards');
const delBtn = document.querySelector(".delBtn");
const counter = document.querySelector("#compteur p");

delBtn.addEventListener('click',function(){ // delete default task on click
    deleteTask(taskCard); // target the right task
    compter();
});

function addTask (){
    const newTask = taskCard.cloneNode(true);
    const newDelBtn = newTask.querySelector(".delBtn");
    const newTaskArea = newTask.querySelector(".task");
    newTaskArea.value = "New Task"; // set new task text to "New Task"
    newDelBtn.addEventListener('click',function(){ // delete default task on click
        deleteTask(newTask); 
    });
   
    taskConteiner.appendChild(newTask);
    compter();
   // updeteCount();
};


function deleteTask(task){
    task.remove();// remove the task
    compter()

};

function compter(){
  let quantite = taskConteiner.children.length;
  counter.innerHTML= "Le nombre de tasks est :"+quantite;

}

addBtn.addEventListener('click',addTask); // add a task on click
compter();