
const app = (async () => {
    const dataApi = 'http://kinfirm.test/api/list';
    const fetchData = async () => {
    try {
      const response = await fetch(dataApi);
      if (response.ok) {
        return await response.json();        
      }
    } catch (error) {
      console.error(error);
    }
  }
  const apiData = await fetchData();
  async function renderData(apiData) {
    const holder = document.querySelector('.product-holder');
    let productHtml = ''
    apiData.forEach(element => {
      const tags = `<div class="card" style="width: 18rem;">
        <img src="${element['photo']}" style="height: 200px" class="card-img-top rounded mx-auto img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">${element['sku']}</h5>
          <a href="http://kinfirm.test/${element['id']}" class="btn btn-primary">View</a>
        </div>
      </div>`
      productHtml += tags; 
    });
    holder.innerHTML = productHtml;
  }

  function sort(data){
    const sortedData = data.sort((a, b) =>{
    return ((b.stocks? b.stocks['stock']: 0) - (a.stocks? a.stocks['stock']: 0))
    })
    return sortedData
  }
  const sortBtn = document.querySelector('.sort');
  sortBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    const sortedData = sort(apiData).filter(item =>{
      return item['tags'].length > 0 && item.stocks !== null;
    });
    renderData(sortedData);
  });
  renderData( apiData);
       
})()
export default app;