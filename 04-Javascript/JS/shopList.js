// Belum Selesai kak

const inputItem = document.getElementById('input-item');
const btnAddItem = document.getElementById('btn-addItem');
const listContainer = document.querySelector('.list');

const database = new Map();


btnAddItem.addEventListener('click', (event) =>  {
    const ITEM_KEY = inputItem.value
    const ITEM_VALUE = inputItem.value;

    
    const listItem = document.createElement('li');
    const textItem = document.createElement('p');
    const btnDelete = document.createElement('button');
    const counter = document.createElement('button');
    

    if (ITEM_VALUE === '') {
        alert("Item Name can't be blank");
        inputItem.focus();
        return;
      }
    
      // If user input the same item, display a counter showing how many related item do we have
      // If there are only items, do not display the counter
      if (database.has(ITEM_KEY)) {
        const itemCounter = document.getElementById(ITEM_KEY);
        count = Number(itemCounter.textContent);
        itemCounter.textContent = (count+ 1);
        inputItem.value ='';
        inputItem.focus();
        return;
      }

      // NOTE: Add the new item to database
      database.set(ITEM_KEY, ITEM_VALUE);
    
      // NOTE: Add attribute
      listItem.classList.add('list-item'); // NOTE: Add Class
    
      // NOTE: Add value
      textItem.textContent = ITEM_VALUE;
      btnDelete.textContent = 'Delete';
      
      // NOTE: The counter should be dynamicly show how much do we have for this item
      var count = 1
      counter.textContent = count;
   
      counter.setAttribute("id",ITEM_KEY);
     
    
      // NOTE: Combine elements
      listItem.append(textItem, btnDelete, counter);
      listContainer.appendChild(listItem);
      
  
      // NOTE: Handle click event for delete button
      // Add delete confirmation
      // If user confirms yes, delete the item if it is the only item, otherwise decrease the counter
      // If user confirm no/decline/press ESC, do not delete the item
      btnDelete.addEventListener('click', () => {
        const Yes = confirm('Are you sure want to delete this item')
          if (Yes){
            if (counter.textContent == 1){
              listContainer.removeChild(listItem) 
            } else {
                counter.textContent = counter.textContent - Yes;
            }
          } else {
            return;
          }   
      });
      
      inputItem.value = '';
      inputItem.focus();
    });
