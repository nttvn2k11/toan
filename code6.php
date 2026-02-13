<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thống kê – xác suất</title>
    <style>
        /* NỀN TRẮNG HOÀN TOÀN – KHÔNG ICON, KHÔNG MÀU SẮC */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #ffffff;
            font-family: 'Arial', 'Helvetica', sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #000000;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
            background: white;
            padding: 25px 30px;
            box-shadow: 0 0 0 1px #e0e0e0;
            border-radius: 0;
        }
        h1, h2, h3 {
            font-weight: 600;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #888;
            padding-bottom: 8px;
            color: #000;
        }
        .menu, .input-panel {
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 1rem;
        }
        select, input[type="text"], input[type="number"] {
            width: 100%;
            padding: 12px 14px;
            font-size: 1rem;
            border: 1px solid #222;
            background: white;
            color: black;
            border-radius: 0;
            font-family: 'Courier New', monospace;
            margin-bottom: 18px;
        }
        select {
            background: white;
            cursor: pointer;
        }
        button {
            background: white;
            border: 2px solid black;
            padding: 12px 32px;
            font-size: 1.1rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            margin: 10px 0 30px;
            transition: 0.1s;
            color: black;
        }
        button:hover {
            background: black;
            color: white;
        }
        .output {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #333;
        }
        .explanation {
            background: #fafafa;
            padding: 18px 20px;
            margin-bottom: 25px;
            border-left: 4px solid black;
            font-family: 'Courier New', monospace;
            white-space: pre-wrap;
            word-break: break-word;
            color: #000;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.98rem;
            border: 1px solid #aaa;
        }
        th {
            background: white;
            font-weight: 700;
            border-bottom: 2px solid black;
            padding: 12px 6px;
            text-align: center;
            border: 1px solid #222;
        }
        td {
            padding: 10px 6px;
            border: 1px solid #222;
            text-align: center;
        }
        .total-row {
            font-weight: 700;
            border-top: 2px solid black;
            background: white;
        }
        canvas {
            display: block;
            margin: 30px auto 15px;
            border: 1px solid black;
            background: white;
            width: 100%;
            height: auto;
            max-width: 600px;
        }
        .conclusion {
            margin-top: 25px;
            padding: 15px 20px;
            background: white;
            border: 1px solid black;
            font-style: normal;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="menu">
            <label for="problemType">chọn dạng:</label>
            <select id="problemType">
                <option value="freqTable">Bảng tần số</option>
                <option value="relFreqTable">Bảng tần số tương đối</option>
                <option value="freqChart">Biểu đồ tần số (cột)</option>
                <option value="relFreqChart">Biểu đồ tần số tương đối</option>
                <option value="grouped">Số liệu ghép nhóm</option>
                <option value="probability">Xác suất (không gian mẫu + biến cố)</option>
            </select>
        </div>

        <!-- KHU VỰC NHẬP DỮ LIỆU – thay đổi theo lựa chọn -->
        <div id="inputPanel" class="input-panel"></div>

        <!-- NÚT GIẢI DUY NHẤT -->
        <button id="solveBtn">giải</button>

        <!-- KHU VỰC KẾT QUẢ: CÔNG THỨC, BẢNG, BIỂU ĐỒ, KẾT LUẬN -->
        <div id="outputArea" class="output">
            <div id="explanationDiv" class="explanation"></div>
            <div id="tableContainer"></div>
            <div style="text-align: center;">
                <canvas id="chartCanvas" width="600" height="300" style="display: none;"></canvas>
            </div>
            <div id="conclusionDiv" class="conclusion"></div>
        </div>
    </div>

    <script>
        (function() {
            "use strict";

            // ---------- LẤY CÁC PHẦN TỬ DOM ----------
            const problemSelect = document.getElementById('problemType');
            const inputPanel = document.getElementById('inputPanel');
            const solveBtn = document.getElementById('solveBtn');
            const explanationDiv = document.getElementById('explanationDiv');
            const tableContainer = document.getElementById('tableContainer');
            const canvas = document.getElementById('chartCanvas');
            const ctx = canvas.getContext('2d');
            const conclusionDiv = document.getElementById('conclusionDiv');

            // ---------- BỘ NHỚ TẠM CHO CÁC Ô NHẬP ----------
            let currentInputs = {};

            // ---------- VẼ LẠI GIAO DIỆN NHẬP LIỆU THEO LỰA CHỌN ----------
            function renderInputs() {
                const type = problemSelect.value;
                let html = '';

                if (type === 'freqTable' || type === 'relFreqTable' || type === 'freqChart' || type === 'relFreqChart') {
                    html = `
                        <label>NHẬP DÃY SỐ (cách nhau bởi khoảng trắng)</label>
                        <input type="text" id="dataInput" placeholder="ví dụ: 1 2 2 3 4 4 4 5" value="${currentInputs.dataRaw || ''}">
                        <span style="font-size: 0.9rem; color: #333;">Số thực hoặc nguyên, cách nhau bằng space</span>
                    `;
                } else if (type === 'grouped') {
                    html = `
                        <label>NHẬP DÃY SỐ LIỆU (cách space)</label>
                        <input type="text" id="groupedDataInput" placeholder="ví dụ: 3 8 12 15 21 22 23 30" value="${currentInputs.groupData || ''}">
                        <label>NHẬP CÁC KHOẢNG (cách phẩy, dạng a-b)</label>
                        <input type="text" id="intervalInput" placeholder="ví dụ: 0-10,10-20,20-30,30-40" value="${currentInputs.groupInterval || ''}">
                        <span style="font-size: 0.9rem;">Khoảng [a; b) – riêng khoảng cuối lấy cả b</span>
                    `;
                } else if (type === 'probability') {
                    html = `
                        <label>SỐ PHẦN TỬ KHÔNG GIAN MẪU n(S) = n</label>
                        <input type="number" id="sampleSpaceN" min="1" step="1" placeholder="ví dụ: 20" value="${currentInputs.n || '20'}">
                        <label>SỐ PHẦN TỬ BIẾN CỐ A n(A)</label>
                        <input type="number" id="eventA" min="0" step="1" placeholder="ví dụ: 5" value="${currentInputs.nA || '5'}">
                    `;
                }
                inputPanel.innerHTML = html;
            }

            // ---------- LƯU LẠI GIÁ TRỊ ĐÃ NHẬP ----------
            function storeCurrentInputs() {
                const type = problemSelect.value;
                if (type.includes('freq') || type === 'relFreqTable' || type === 'freqChart' || type === 'relFreqChart') {
                    const inp = document.getElementById('dataInput');
                    if (inp) currentInputs.dataRaw = inp.value;
                } else if (type === 'grouped') {
                    const d = document.getElementById('groupedDataInput');
                    const iv = document.getElementById('intervalInput');
                    if (d) currentInputs.groupData = d.value;
                    if (iv) currentInputs.groupInterval = iv.value;
                } else if (type === 'probability') {
                    const n = document.getElementById('sampleSpaceN');
                    const a = document.getElementById('eventA');
                    if (n) currentInputs.n = n.value;
                    if (a) currentInputs.nA = a.value;
                }
            }

            // ---------- HÀM XỬ LÝ DỮ LIỆU ----------
            // Chuyển chuỗi thành mảng số
            function parseNumberList(str) {
                if (!str.trim()) return [];
                const parts = str.trim().split(/\s+/);
                const nums = [];
                for (let p of parts) {
                    const num = parseFloat(p);
                    if (!isNaN(num)) nums.push(num);
                }
                return nums;
            }

            // Tính tần số, tần suất từ dãy số
            function computeFrequency(data) {
                if (data.length === 0) return null;
                const freqMap = new Map();
                data.forEach(val => {
                    freqMap.set(val, (freqMap.get(val) || 0) + 1);
                });
                const values = Array.from(freqMap.keys()).sort((a,b) => a - b);
                const freqs = values.map(v => freqMap.get(v));
                const n = data.length;
                const relFreqs = freqs.map(f => (f / n * 100));
                return { values, freqs, relFreqs, n };
            }

            // Phân tích chuỗi khoảng "a-b, c-d"
            function parseIntervals(str) {
                if (!str.trim()) return null;
                const parts = str.split(',').map(s => s.trim()).filter(s => s !== '');
                const intervals = [];
                for (let p of parts) {
                    const match = p.match(/^(\d+(?:\.\d+)?)\s*-\s*(\d+(?:\.\d+)?)$/);
                    if (!match) return null;
                    const lower = parseFloat(match[1]);
                    const upper = parseFloat(match[2]);
                    if (isNaN(lower) || isNaN(upper)) return null;
                    intervals.push({ lower, upper, label: `${lower} – ${upper}` });
                }
                intervals.sort((a,b) => a.lower - b.lower);
                return intervals;
            }

            // Tính tần số ghép nhóm
            function computeGroupedFrequency(data, intervals) {
                if (data.length === 0 || !intervals || intervals.length === 0) return null;
                const counts = new Array(intervals.length).fill(0);
                data.forEach(val => {
                    for (let i = 0; i < intervals.length; i++) {
                        const { lower, upper } = intervals[i];
                        if (i === intervals.length - 1) {
                            if (val >= lower && val <= upper) { counts[i]++; break; }
                        } else {
                            if (val >= lower && val < upper) { counts[i]++; break; }
                        }
                    }
                });
                const n = data.length;
                const relFreqs = counts.map(c => (c / n * 100));
                return { intervals, freqs: counts, relFreqs, n, labels: intervals.map(iv => iv.label) };
            }

            // ---------- VẼ BIỂU ĐỒ CỘT (canvas) ----------
            function drawBarChart(labels, values, title, yLabel = 'Tần số') {
                canvas.style.display = 'block';
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                if (!labels || labels.length === 0 || values.every(v => v === 0)) {
                    ctx.font = '14px Arial';
                    ctx.fillText('Không có dữ liệu để vẽ', 50, 150);
                    return;
                }
                const w = canvas.width, h = canvas.height;
                const margin = { top: 30, right: 30, bottom: 60, left: 60 };
                const innerWidth = w - margin.left - margin.right;
                const barWidth = Math.min(40, (innerWidth / labels.length) * 0.7);
                const gap = (innerWidth - barWidth * labels.length) / (labels.length + 1);
                
                const maxVal = Math.max(...values, 0.1);
                const scaleY = (h - margin.top - margin.bottom) / maxVal * 0.85;
                
                // Vẽ trục
                ctx.beginPath();
                ctx.strokeStyle = '#000';
                ctx.lineWidth = 1;
                ctx.moveTo(margin.left, margin.top);
                ctx.lineTo(margin.left, h - margin.bottom);
                ctx.lineTo(w - margin.right, h - margin.bottom);
                ctx.stroke();

                // Vẽ từng cột
                for (let i = 0; i < labels.length; i++) {
                    const x = margin.left + gap + i * (barWidth + gap);
                    const barHeight = values[i] * scaleY;
                    ctx.fillStyle = '#ffffff';
                    ctx.strokeStyle = '#000000';
                    ctx.lineWidth = 1.5;
                    ctx.fillRect(x, h - margin.bottom - barHeight, barWidth, barHeight);
                    ctx.strokeRect(x, h - margin.bottom - barHeight, barWidth, barHeight);
                    
                    // Giá trị trên cột
                    ctx.fillStyle = '#000';
                    ctx.font = '12px Arial';
                    ctx.fillText(values[i].toFixed(1), x + 2, h - margin.bottom - barHeight - 5);
                    
                    // Nhãn dưới cột (x nghiêng nhẹ cho dễ đọc)
                    ctx.save();
                    ctx.translate(x + barWidth/2, h - margin.bottom + 15);
                    ctx.rotate(Math.PI / 6);
                    ctx.font = '11px Arial';
                    ctx.fillStyle = '#000';
                    ctx.fillText(labels[i].toString().substring(0, 12), 0, 0);
                    ctx.restore();
                }

                // Tiêu đề biểu đồ
                ctx.font = 'bold 14px Arial';
                ctx.fillStyle = '#000';
                ctx.fillText(title, w/2 - 60, margin.top - 5);
                
                // Nhãn trục y
                ctx.save();
                ctx.translate(20, h/2);
                ctx.rotate(-Math.PI/2);
                ctx.font = '12px Arial';
                ctx.fillStyle = '#000';
                ctx.fillText(yLabel, 0, 0);
                ctx.restore();
            }

            // ---------- TẠO BẢNG HTML ----------
            function generateFreqTable(values, freqs, relFreqs, n) {
                let html = '<table><thead><tr><th>Giá trị</th><th>Tần số (f)</th><th>Tần số tương đối (f%)</th></tr></thead><tbody>';
                for (let i = 0; i < values.length; i++) {
                    html += `<tr><td>${values[i]}</td><td>${freqs[i]}</td><td>${relFreqs[i].toFixed(2)}%</td></tr>`;
                }
                let sumRel = relFreqs.reduce((a,b)=>a+b,0).toFixed(2);
                html += `<tr class="total-row"><td><strong>Tổng</strong></td><td><strong>${n}</strong></td><td><strong>${sumRel}%</strong></td></tr>`;
                html += '</tbody></table>';
                return html;
            }

            function generateGroupedTable(labels, freqs, relFreqs, n) {
                let html = '<table><thead><tr><th>Nhóm</th><th>Tần số (f)</th><th>Tần số tương đối (%)</th></tr></thead><tbody>';
                for (let i = 0; i < labels.length; i++) {
                    html += `<tr><td>${labels[i]}</td><td>${freqs[i]}</td><td>${relFreqs[i].toFixed(2)}%</td></tr>`;
                }
                let sumRel = relFreqs.reduce((a,b)=>a+b,0).toFixed(2);
                html += `<tr class="total-row"><td><strong>Tổng</strong></td><td><strong>${n}</strong></td><td><strong>${sumRel}%</strong></td></tr>`;
                html += '</tbody></table>';
                return html;
            }

            // ---------- CÁC HÀM GIẢI CHO TỪNG DẠNG BÀI ----------
            function solveFrequencyTable(drawChart = false, chartType = 'freq') {
                const inp = document.getElementById('dataInput');
                if (!inp) return;
                const raw = inp.value;
                currentInputs.dataRaw = raw;
                const data = parseNumberList(raw);
                if (data.length === 0) {
                    explanationDiv.innerHTML = 'Vui lòng nhập dãy số hợp lệ.';
                    tableContainer.innerHTML = ''; canvas.style.display = 'none'; conclusionDiv.innerHTML = '';
                    return;
                }
                const freqRes = computeFrequency(data);
                if (!freqRes) return;
                const { values, freqs, relFreqs, n } = freqRes;

                // Công thức và bước giải
                let exp = `CÔNG THỨC:\n• Tần số (f) = số lần xuất hiện của giá trị\n• Tần số tương đối: f% = (f / n) × 100%   (với n = ${n})\n\nDãy số: ${data.join(', ')}  (n = ${n})\n`;
                explanationDiv.innerHTML = exp.replace(/\n/g, '<br>');

                let tableHTML = generateFreqTable(values, freqs, relFreqs, n);
                tableContainer.innerHTML = tableHTML;

                if (drawChart) {
                    if (chartType === 'freq') drawBarChart(values.map(v => v.toString()), freqs, 'BIỂU ĐỒ TẦN SỐ', 'Tần số');
                    else drawBarChart(values.map(v => v.toString()), relFreqs, 'BIỂU ĐỒ TẦN SỐ TƯƠNG ĐỐI (%)', 'Phần trăm %');
                } else {
                    canvas.style.display = 'none';
                }

                conclusionDiv.innerHTML = `KẾT LUẬN: Bảng tần số đã được lập. Tổng số dữ liệu n = ${n}. Tổng tần số tương đối = 100% (có thể sai số do làm tròn).`;
            }

            // Bảng tần số tương đối (vẫn hiển thị bảng đầy đủ, nhấn mạnh %)
            function solveRelFreqOnly() {
                solveFrequencyTable(false);
                explanationDiv.innerHTML += '<br><strong>→ Bảng trên bao gồm tần số tương đối (cột f%).</strong>';
            }

            // Biểu đồ tần số
            function solveFreqChart() {
                solveFrequencyTable(true, 'freq');
            }

            // Biểu đồ tần số tương đối
            function solveRelFreqChart() {
                solveFrequencyTable(true, 'rel');
            }

            // Ghép nhóm
            function solveGrouped() {
                const dataInput = document.getElementById('groupedDataInput');
                const intervalInput = document.getElementById('intervalInput');
                if (!dataInput || !intervalInput) return;
                currentInputs.groupData = dataInput.value;
                currentInputs.groupInterval = intervalInput.value;
                
                const data = parseNumberList(dataInput.value);
                const intervals = parseIntervals(intervalInput.value);
                if (data.length === 0) {
                    explanationDiv.innerHTML = 'Dữ liệu không hợp lệ hoặc rỗng.';
                    return;
                }
                if (!intervals || intervals.length === 0) {
                    explanationDiv.innerHTML = 'Khoảng không hợp lệ. Vui lòng nhập đúng định dạng a-b, cách phẩy.';
                    return;
                }

                const grouped = computeGroupedFrequency(data, intervals);
                if (!grouped) return;
                const { labels, freqs, relFreqs, n } = grouped;

                let exp = `GHÉP NHÓM: Công thức tần số, tần số tương đối f% = (f / n) × 100%.\n`;
                exp += `• Số liệu: ${data.length} giá trị.\n• Các khoảng đã nhập: ${intervals.map(iv => iv.label).join('; ')}\n`;
                explanationDiv.innerHTML = exp.replace(/\n/g, '<br>');

                tableContainer.innerHTML = generateGroupedTable(labels, freqs, relFreqs, n);
                drawBarChart(labels, freqs, 'BIỂU ĐỒ TẦN SỐ - GHÉP NHÓM', 'Tần số');
                conclusionDiv.innerHTML = `KẾT LUẬN: Bảng phân bố tần số ghép nhóm. Tổng tần số = ${n}.`;
            }

            // Xác suất
            function solveProbability() {
                const nInput = document.getElementById('sampleSpaceN');
                const aInput = document.getElementById('eventA');
                if (!nInput || !aInput) return;
                const n = parseInt(nInput.value, 10);
                const nA = parseInt(aInput.value, 10);
                currentInputs.n = nInput.value;
                currentInputs.nA = aInput.value;
                if (isNaN(n) || n <= 0) {
                    explanationDiv.innerHTML = 'Số phần tử không gian mẫu n phải là số nguyên dương.';
                    tableContainer.innerHTML = ''; canvas.style.display = 'none'; conclusionDiv.innerHTML = '';
                    return;
                }
                if (isNaN(nA) || nA < 0) {
                    explanationDiv.innerHTML = 'Số phần tử biến cố A phải >= 0.';
                    return;
                }
                if (nA > n) {
                    explanationDiv.innerHTML = 'n(A) không thể lớn hơn n (số phần tử không gian mẫu).';
                    return;
                }
                canvas.style.display = 'none';
                const p = nA / n;
                const percent = (p * 100).toFixed(2);
                let exp = '';
                exp += 'CÔNG THỨC XÁC SUẤT CỔ ĐIỂN:\n';
                exp += '   P(A) = n(A) / n(S)\n';
                exp += '   Trong đó: n(S) = số phần tử không gian mẫu, n(A) = số phần tử biến cố A.\n\n';
                exp += `Bước 1: Xác định không gian mẫu: n(S) = ${n}\n`;
                exp += `Bước 2: Xác định biến cố A: n(A) = ${nA}\n`;
                exp += `Bước 3: Áp dụng công thức: P(A) = ${nA} / ${n} = ${p.toFixed(4)} = ${percent}%\n`;
                explanationDiv.innerHTML = exp.replace(/\n/g, '<br>');
                tableContainer.innerHTML = '';
                conclusionDiv.innerHTML = `KẾT LUẬN: Xác suất của biến cố A là P(A) = ${p.toFixed(4)} (${percent}%).`;
            }

            // ---------- ĐIỀU HƯỚNG GIẢI ----------
            function solve() {
                // Ẩn canvas trước khi giải
                canvas.style.display = 'none';
                const type = problemSelect.value;
                storeCurrentInputs();

                switch (type) {
                    case 'freqTable':
                        solveFrequencyTable(false);
                        break;
                    case 'relFreqTable':
                        solveRelFreqOnly();
                        break;
                    case 'freqChart':
                        solveFreqChart();
                        break;
                    case 'relFreqChart':
                        solveRelFreqChart();
                        break;
                    case 'grouped':
                        solveGrouped();
                        break;
                    case 'probability':
                        solveProbability();
                        break;
                    default:
                        break;
                }
            }

            // ---------- KHỞI TẠO VÀ SỰ KIỆN ----------
            function init() {
                // Gán dữ liệu mẫu ban đầu
                currentInputs.dataRaw = '1 2 2 3 4 4 4 5';
                currentInputs.groupData = '3 8 12 15 21 22 23 30 31 35 40';
                currentInputs.groupInterval = '0-10,10-20,20-30,30-40,40-50';
                currentInputs.n = '20';
                currentInputs.nA = '5';
                
                renderInputs();

                // Sự kiện thay đổi menu
                problemSelect.addEventListener('change', function() {
                    storeCurrentInputs();
                    renderInputs();
                    // Xóa kết quả cũ
                    explanationDiv.innerHTML = '';
                    tableContainer.innerHTML = '';
                    canvas.style.display = 'none';
                    conclusionDiv.innerHTML = '';
                });

                // Nút giải
                solveBtn.addEventListener('click', solve);

                // Lưu input khi gõ
                window.addEventListener('input', function(e) {
                    if (e.target.matches('#dataInput, #groupedDataInput, #intervalInput, #sampleSpaceN, #eventA')) {
                        storeCurrentInputs();
                    }
                });
            }

            init();
        })();
    </script>
</body>
</html>