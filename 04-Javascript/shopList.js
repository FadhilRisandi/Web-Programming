// Belum Selesai kak

const inputItem = document.getElementById('input-item');
const btnAddItem = document.getElementById('btn-addItem');
const listContainer = document.querySelector('.list');

const database = new Map();


btnAddItem.addEventListener('click', (event) =>  {
    const item = inputItem.value

    
    const listItem = document.createElement('li');
    const textItem = document.createElement('p');
    const btnDelete = document.createElement('button');
    const counter = document.createElement('button');
    
  

    if (item === '') {
        alert("Item Name can't be blank");
        inputItem.focus();
        return;
      }
    
      // WARN: Check for duplication
      if (database.has(item)) {
        alert(`You already have ${item}`);
        counter.textContent = counter.textContent + '1';
        inputItem.value = '';
        inputItem.focus();
        return;
       
      }
      
      // NOTE: Add the new item to database
      database.set(String(item), item);
    
      // NOTE: Add attribute
      listItem.classList.add('list-item'); // NOTE: Add Class
    
      // NOTE: Add value
      textItem.textContent = item;
      btnDelete.textContent = 'Delete';
      
      // NOTE: The counter should be dynamicly show how much do we have for this item
  
      counter.textContent = 5;
     
    
      // NOTE: Combine elements
      listItem.append(textItem, btnDelete, counter);
      listContainer.appendChild(listItem);
      
  
      
  
      // NOTE: Handle click event for delete button
      
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
