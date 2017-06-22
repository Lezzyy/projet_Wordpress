
  var el = document.getElementById('div_date');
  var maintenant=new Date();
  var jour=maintenant.getDate();
  var mois=maintenant.getMonth()+1;
  var an=maintenant.getFullYear();
  el.innerText("Nous sommes le ",jour,"/",mois,"/",an,".");
