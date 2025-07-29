<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>कुटुंब प्रमुख अहवाल</title>
    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        } */

        .container1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header1{
            color: #333;
            padding: 20px;
            margin-bottom: 30px;
            /* text-align: center; */
                margin-top: -3%;
        }

        .header1 h1 {
            /* font-size: 2rem; */
            font-size: 1.3rem;
            font-weight: 600;
            /* color: #2c3e50; */
            color: #3498db;
            border-bottom: 2px solid #3498db;
        }

        .filter-section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            margin-top: -3%;
        }

        .filter-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #555;
            font-size: 0.95rem;
        }

        .form-group select {
            padding: 12px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 1rem;
            background: white;
            transition: border-color 0.3s ease;
        }

        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .button-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: #667eea;
            color: white;
        }

        .btn-primary:hover {
            background: #5a6fd8;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }

        .btn-export {
            background: #17a2b8;
            color: white;
        }

        .btn-export:hover {
            background: #138496;
            transform: translateY(-2px);
        }

        .results-section {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .results-header {
            padding: 20px 25px;
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .show-entries {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .show-entries select {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .search-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-box input {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 200px;
        }

        .table-container {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
        }

        .data-table th {
            background: linear-gradient(135deg, #2c5aa0, #1e4080);
            color: white;
            padding: 15px 8px;
            text-align: center;
            font-weight: 600;
            white-space: nowrap;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .data-table td {
            padding: 12px 8px;
            text-align: center;
            border-bottom: 1px solid #e9ecef;
            white-space: nowrap;
        }

        .data-table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .data-table tbody tr:nth-child(even) {
            background-color: #fdfdfd;
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .container {
                padding: 10px;
            }

            .header1 h1 {
                font-size: 1.5rem;
                margin-top: -5%;
            }

            .filter-section {
                padding: 15px;
                margin-top: -15%;
            }

            .filter-row {
                grid-template-columns: 1fr;
            }

            .button-group {
                justify-content: center;
            }

            .results-header {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box input {
                width: 100%;
            }

            .data-table {
                font-size: 0.8rem;
            }

            .data-table th,
            .data-table td {
                padding: 8px 4px;
            }

            .form-group select option{
                max-width: 50%;
            }
        }
        

        @media (max-width: 900px) {
            .data-table th,
            .data-table td {
                padding: 6px 2px;
                font-size: 0.75rem;
            }
        }

        .no-data {
            text-align: center;
            padding: 40px;
            color: #6c757d;
            font-style: italic;
        }

        .loading {
            text-align: center;
            padding: 40px;
            color: #667eea;
        }

        .spinner {
            border: 3px solid #f3f3f3;
            border-top: 3px solid #667eea;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <?php include('include/header.php'); ?>
    <div class="container1">
        <div class="header1">
            <h1>गाव निहाय प्रश्न</h1>
        </div>

        <div class="filter-section">
            <div class="filter-row">
                <div class="form-group">
                    <label for="district">जिल्हा</label>
                    <select id="district">
                        <option value="" disabled selected>-- जिल्हा निवडा --</option>
                        <option value="ahmednagar">अहमदनगर</option>
                        <option value="pune">पुणे</option>
                        <option value="mumbai">मुंबई</option>
                        <option value="nagpur">नागपूर</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="taluka">तालुका</label>
                    <select id="taluka">
                        <option value="" disabled selected>-- तालुका निवडा --</option>
                        <option value="akole">अकोले</option>
                        <option value="sangamner">संगमनेर</option>
                        <option value="kopargaon">कोपरगाव</option>
                        <option value="rahata">राहता</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="village">गाव</label>
                    <select id="village">
                        <option value=""disabled selected>-- गाव निवडा --</option>
                        <option value="aabitkhand">आबितखंड</option>
                        <option value="ambevangan">अंबेवंगण</option>
                        <option value="ambikanagar">अंबिकानगर</option>
                    </select>
                </div>
            </div>
            
            <div class="button-group">
                <button class="btn btn-primary" onclick="applyFilter()">
                    <span>🔍</span> APPLY FILTER
                </button>
                <button class="btn btn-secondary" onclick="resetFilter()">
                    <span>↻</span> RESET
                </button>
                <button class="btn btn-export" onclick="exportData()">
                    <span>📊</span> EXPORT
                </button>
            </div>
        </div>

        <div class="results-section">
            <div class="results-header">
                <div class="show-entries">
                    <span>दाखवा</span>
                    <select id="entriesCount" onchange="changeEntries()">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>नोंदी दाखवा</span>
                </div>
                <div class="search-box">
                    <span>शोध:</span>
                    <input type="text" id="searchInput" placeholder="शोधा..." oninput="searchTable()">
                </div>
            </div>

            <div class="table-container">
                <table class="data-table" id="dataTable">
                    <thead>
                        <tr>
                            <th rowspan="2">जिल्हा</th>
                            <th rowspan="2">तालुका</th>
                            <th rowspan="2">गाव</th>
                            <th rowspan="2">लोकसंख्या</th>
                            <th colspan="3">पीएम उज्ज्वला योजनेचा लाभ घेताना आहे का?</th>
                            <th colspan="3">विधवाभिकेची (रेन कार्ड) आहे का?</th>
                            <th colspan="3">प्रधानमंत्री आवास योजना</th>
                        </tr>
                        <tr>
                            <th>हो</th>
                            <th>नाही</th>
                            <th>लागू नाही</th>
                            <th>हो</th>
                            <th>नाही</th>
                            <th>लागू नाही</th>
                            <th>हो</th>
                            <th>नाही</th>
                            <th>लागू नाही</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>AHMEDNAGAR</td>
                            <td>AKOLE</td>
                            <td>Aabitkhand</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>AHMEDNAGAR</td>
                            <td>AKOLE</td>
                            <td>Ambevangan</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>AHMEDNAGAR</td>
                            <td>AKOLE</td>
                            <td>Ambikanagar</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php include('include/footer.php'); ?>
    <script>
        function applyFilter() {
            const district = document.getElementById('district').value;
            const taluka = document.getElementById('taluka').value;
            const village = document.getElementById('village').value;
            
            // Show loading state
            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '<tr><td colspan="13"><div class="loading"><div class="spinner"></div>फिल्टर लागू करत आहे...</div></td></tr>';
            
            // Simulate API call
            setTimeout(() => {
                // Reset to sample data for demo
                tbody.innerHTML = `
                    <tr>
                        <td>AHMEDNAGAR</td>
                        <td>AKOLE</td>
                        <td>Aabitkhand</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>AHMEDNAGAR</td>
                        <td>AKOLE</td>
                        <td>Ambevangan</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>AHMEDNAGAR</td>
                        <td>AKOLE</td>
                        <td>Ambikanagar</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                `;
            }, 1000);
        }
        
        function resetFilter() {
            document.getElementById('district').value = '';
            document.getElementById('taluka').value = '';
            document.getElementById('village').value = '';
            document.getElementById('searchInput').value = '';
            
            // Reset table
            applyFilter();
        }
        
        function exportData() {
            // Simple CSV export simulation
            alert('डेटा एक्सपोर्ट करत आहे... (CSV फाइल डाउनलोड होईल)');
        }
        
        function changeEntries() {
            const count = document.getElementById('entriesCount').value;
            // Implementation for changing number of entries
            console.log('Showing ' + count + ' entries');
        }
        
        function searchTable() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const tbody = document.getElementById('tableBody');
            const rows = tbody.getElementsByTagName('tr');
            
            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName('td');
                let found = false;
                
                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].textContent.toLowerCase().includes(input)) {
                        found = true;
                        break;
                    }
                }
                
                row.style.display = found ? '' : 'none';
            }
        }
        
        // Dynamic taluka population based on district
        document.getElementById('district').addEventListener('change', function() {
            const taluka = document.getElementById('taluka');
            const village = document.getElementById('village');
            
            // Clear dependent dropdowns
            taluka.innerHTML = '<option value="">-- तालुका निवडा --</option>';
            village.innerHTML = '<option value="">-- गाव निवडा --</option>';
            
            if (this.value === 'ahmednagar') {
                const talukas = ['अकोले', 'संगमनेर', 'कोपरगाव', 'राहता', 'नेवासा'];
                talukas.forEach(t => {
                    const option = document.createElement('option');
                    option.value = t.toLowerCase();
                    option.textContent = t;
                    taluka.appendChild(option);
                });
            }
        });
        
        // Dynamic village population based on taluka
        document.getElementById('taluka').addEventListener('change', function() {
            const village = document.getElementById('village');
            village.innerHTML = '<option value="">-- गाव निवडा --</option>';
            
            if (this.value === 'akole') {
                const villages = ['आबितखंड', 'अंबेवंगण', 'अंबिकानगर', 'भांडगाव', 'चिंचपाड'];
                villages.forEach(v => {
                    const option = document.createElement('option');
                    option.value = v;
                    option.textContent = v;
                    village.appendChild(option);
                });
            }
        });
    </script>
   
</body>
</html>