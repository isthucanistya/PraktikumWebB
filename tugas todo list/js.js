 function addRow() {
            
            var isi = document.getElementById('isi').value;
            var table = document.getElementsByTagName('table')[0];
            
            var newRow = table.insertRow(table.rows.length);
            var cel0 = newRow.insertCell(0);
            var cel1 = newRow.insertCell(1);
            var cel2 = newRow.insertCell(2);

            var checkbox = document.createElement('input');
            checkbox.setAttribute('type', 'checkbox');
            checkbox.setAttribute('name', 'selected');
            cel0.appendChild(checkbox);
            
            var no = document.createElement('number');
            no.setAttribute('class', 'number');
            cel1.appendChild(no);
            cel2.innerHTML = isi;
            
            if(!isi){
                alert("Field Kosong!");
                table.deleteRow(table.rows.length-1);
            }
            isiNo();
        }
        function deleteSelRow(tableID) {
            var tanya= confirm("Yakin Hapus Data?");
            var table = document.getElementById(tableID).tBodies[0];
            var rowCount = table.rows.length;
            if (tanya== true) {
            for (var i = rowCount-1; i > 0; i--) {
                var row = table.rows[i];
                var chkbox = row.cells[0].getElementsByTagName('input')[0];
                    if ('checkbox' == chkbox.type && true == chkbox.checked) {
                        table.deleteRow(i);    
                    }
                }
            }
            isiNo();
        }

        function toggle() {
            checkboxes = document.getElementsByName('selected');
            for(var i=0, n=checkboxes.length;i<n;i++)
                checkboxes[i].checked = true;
        }

        function isiNo() {
            no = document.getElementsByClassName('number');
            for (iNo = 0; iNo < no.length; iNo++) {
                no[iNo].innerHTML = iNo + 1;
            }
        }