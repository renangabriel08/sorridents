// document.addEventListener("DOMContentLoaded", function () {
//     const Meses = [
//       "janeiro",
//       "feveiro",
//       "março",
//       "abril",
//       "maio",
//       "junho",
//       "julho",
//       "agosto",
//       "setembro",
//       "outubro",
//       "novembro",
//       "dezembro",
//     ];
//     const tableDays = document.getElementById("dias");
//     function GetDaysCalendar(mes, ano) {
//       document.getElementById("mes").innerHTML = Meses[mes];
//       document.getElementById("ano").innerHTML = ano;
  
//       let firstDayOfWeek = new Date(ano, mes, 1).getDay() - 1;
//       let getLastDayThisMonth = new Date(ano, mes + 1, 0).getDate();
  
//       for (
//         let i = -firstDayOfWeek, index = 0;
//         i < 42 - firstDayOfWeek;
//         i++, index++
//       ) {
//         let dt = new Date(ano, mes, i);
//         let dayTable = tableDays.getElementsByTagName("td")[index];
//         dayTable.innerHTML = dt.getDate();
  
//         if (i < 1) {
//           dayTable.classList.add("mes-anterior");
//         }
//         if (i > getLastDayThisMonth) {
//           dayTable.classList.add("proximo-mes");
//         }
//       }
//     }
  
//     let now = new Date();
//     let month = now.getMonth();
//     let year = now.getFullYear();
//     GetDaysCalendar(month, year);
  
//     const botao_anterior = document.getElementById("btn_ant");
//     const botao_proximo = document.getElementById("btn-next");
  
//     botao_proximo.onclick = function () {
//       month++;
//       if (month > 11) {
//         month = 0;
//         year++;
//       }
//       GetDaysCalendar(month, year);
//     };
  
//     botao_anterior.onclick = function () {
//       month--;
//       if (month < 0) {
//         month = 11;
//         year--;
//       }
//       GetDaysCalendar(month, year);
//     };
//   });
  
  function abrirAgenda() {
    const calendario = document.querySelector("#agenda");
    const agenda = document.querySelector(".modal-content");

    calendario.style.display = 'none';
    agenda.style.display = 'block';
  }
  
  function fecharAgenda() {
    const calendario = document.querySelector("#agenda");
    const agenda = document.querySelector(".modal-content");

    calendario.style.display = 'block';
    agenda.style.display = 'none';
  }