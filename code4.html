<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải căn thức • bậc 2 & 3</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #ffffff;
            font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
            line-height: 1.5;
            padding: 2rem 1rem;
            color: #1e1e1e;
        }
        .container {
            max-width: 640px;
            margin: 0 auto;
        }
        h2 {
            font-weight: 500;
            font-size: 1.9rem;
            letter-spacing: -0.5px;
            margin-bottom: 0.75rem;
            border-bottom: 2px solid #eaeef2;
            padding-bottom: 0.5rem;
        }
        select, input, button {
            width: 100%;
            padding: 0.8rem 1rem;
            margin: 0.5rem 0 1rem 0;
            border: 1px solid #d0d9e0;
            background: white;
            font-size: 1rem;
            border-radius: 10px;
            transition: 0.2s;
            outline: none;
        }
        select {
            appearance: none;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="%23333" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>') no-repeat right 1rem center;
            background-size: 1.2rem;
        }
        input:focus, select:focus {
            border-color: #2c5f2d;
            box-shadow: 0 0 0 3px rgba(44,95,45,0.08);
        }
        button {
            background: #1e2f3a;
            color: white;
            font-weight: 600;
            border: none;
            cursor: pointer;
            letter-spacing: 0.5px;
            margin-top: 0.2rem;
        }
        button:hover {
            background: #0f1e26;
        }
        .form-card {
            background: #fafcfc;
            padding: 1.8rem 1.8rem 1.5rem;
            border-radius: 18px;
            margin: 1.5rem 0 0.8rem;
            border: 1px solid #edf2f5;
            box-shadow: 0 4px 14px rgba(0,0,0,0.02);
        }
        .note {
            background: #ecf3f7;
            padding: 1rem 1.2rem;
            border-radius: 14px;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            color: #144a5e;
            border-left: 4px solid #306b7c;
            word-break: break-word;
        }
        .result-box {
            background: #e9f2f0;
            padding: 1.2rem 1.5rem;
            border-radius: 16px;
            color: #004d40;
            font-weight: 550;
            font-size: 1.25rem;
            margin: 1.2rem 0 0.5rem;
            border: 1px solid #c8e0da;
            word-break: break-word;
        }
        .flex-row {
            display: flex;
            gap: 1rem;
            align-items: center;
            flex-wrap: wrap;
        }
        .flex-row input {
            flex: 1 1 120px;
        }
        .sqrt-symbol {
            font-size: 1.5rem;
            margin-right: 0.2rem;
        }
        hr {
            border: none;
            border-top: 1px solid #e2e9ef;
            margin: 1.7rem 0 0.5rem;
        }
        .footer {
            font-size: 0.8rem;
            color: #6f7e8a;
            text-align: center;
            margin-top: 2.8rem;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Giải căn thức • bậc 2 & 3</h2>
    <select id="mainMenu" onchange="renderForm()">
        <option value="">-- Chọn dạng căn --</option>
        <option value="sqrt2">1. Căn bậc hai (√a)</option>
        <option value="sqrt3">2. Căn bậc ba (∛a)</option>
        <option value="simplify">3. Rút gọn căn bậc hai (√a²b)</option>
        <option value="simplify3">4. Rút gọn căn bậc ba (∛a³b)</option>
        <option value="add">5. Cộng căn cùng loại (a√x + b√x)</option>
        <option value="multiply">6. Nhân căn bậc hai (√a · √b)</option>
        <option value="multiply3">7. Nhân căn bậc ba (∛a · ∛b)</option>
        <option value="divide">8. Chia căn bậc hai (√a / √b)</option>
        <option value="divide3">9. Chia căn bậc ba (∛a / ∛b)</option>
        <option value="rational">10. Trục căn mẫu (1/√a)</option>
        <option value="rational2">11. Trục căn mẫu (1/(√a ± √b))</option>
        <option value="eq1">12. Phương trình √x = a</option>
        <option value="eq2">13. Phương trình √(ax+b) = c</option>
    </select>

    <div id="formContainer" class="form-card"></div>
    <div id="resultDisplay" class="result-box"></div>
    <div class="footer">nguyễn tấn tài 9/1</div>
</div>
    <div class="flex items-center space-x-3">
            <button onclick="window.print()" class="p-2.5 bg-gray-50 hover:bg-gray-200 rounded-xl transition-all" title="In đề thi">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2m-2 4H8v-4h8v4z"/></svg>
            </button>
        </div>

<script>
    (function() {
        const menu = document.getElementById('mainMenu');
        const formArea = document.getElementById('formContainer');
        const resultEl = document.getElementById('resultDisplay');

        window.renderForm = function() {
            const type = menu.value;
            resultEl.innerHTML = '';
            let html = '';

            if (!type) {
                formArea.innerHTML = `<div class="note" style="text-align:center;">Vui lòng chọn dạng căn từ danh sách</div>`;
                return;
            }
            if (type === 'sqrt2') {
                html = `<div class="note">√a &nbsp; (a ≥ 0)</div>
                        <label>Nhập a</label>
                        <input type="number" id="valN" placeholder="Ví dụ: 16" step="any" oninput="calcSqrt2()">
                        <button onclick="calcSqrt2()">Tính</button>`;
            }
            else if (type === 'sqrt3') {
                html = `<div class="note">∛a &nbsp; (a ∈ ℝ)</div>
                        <label>Nhập a</label>
                        <input type="number" id="valN" placeholder="Ví dụ: 27" step="any" oninput="calcSqrt3()">
                        <button onclick="calcSqrt3()">Tính</button>`;
            }
            else if (type === 'simplify') {
                html = `<div class="note">Rút gọn √(a²b) = a√b</div>
                        <label>√ <input type="number" id="valN" placeholder="Số nguyên dương" step="1" min="1" oninput="simplifySqrt()"></label>
                        <button onclick="simplifySqrt()">Rút gọn</button>`;
            }
            else if (type === 'simplify3') {
                html = `<div class="note">Rút gọn ∛(a³b) = a∛b</div>
                        <label>∛ <input type="number" id="valN" placeholder="Nhập số nguyên" step="1" oninput="simplifyCbrt()"></label>
                        <button onclick="simplifyCbrt()">Rút gọn</button>`;
            }
            else if (type === 'add') {
                html = `<div class="note">a√x + b√x = (a+b)√x</div>
                        <div class="flex-row">
                            <input type="number" id="coef1" placeholder="Hệ số a" step="any" value="3" oninput="addRoots()">
                            <span style="font-size:1.5rem;">√x</span>
                        </div>
                        <div class="flex-row" style="margin-top:0.5rem;">
                            <input type="number" id="coef2" placeholder="Hệ số b" step="any" value="5" oninput="addRoots()">
                            <span style="font-size:1.5rem;">√x</span>
                        </div>
                        <button onclick="addRoots()">Tính tổng</button>`;
            }
            // --- Dạng 6: Nhân căn bậc hai ---
            else if (type === 'multiply') {
                html = `<div class="note">√a × √b = √(a·b) (a,b ≥ 0)</div>
                        <div class="flex-row">
                            <input type="number" id="valA" placeholder="a ≥ 0" step="any" min="0" oninput="multiplySqrt()">
                            <span style="font-size:1.8rem;">×</span>
                            <input type="number" id="valB" placeholder="b ≥ 0" step="any" min="0" oninput="multiplySqrt()">
                        </div>
                        <button onclick="multiplySqrt()">Nhân căn</button>`;
            }
            // --- Dạng 7: Nhân căn bậc ba ---
            else if (type === 'multiply3') {
                html = `<div class="note">∛a × ∛b = ∛(a·b) (a,b ∈ ℝ)</div>
                        <div class="flex-row">
                            <input type="number" id="valA" placeholder="a" step="any" oninput="multiplyCbrt()">
                            <span style="font-size:1.8rem;">×</span>
                            <input type="number" id="valB" placeholder="b" step="any" oninput="multiplyCbrt()">
                        </div>
                        <button onclick="multiplyCbrt()">Nhân căn</button>`;
            }
            // --- Dạng 8: Chia căn bậc hai ---
            else if (type === 'divide') {
                html = `<div class="note">√a / √b = √(a/b) (a ≥ 0, b > 0)</div>
                        <div class="flex-row">
                            <input type="number" id="valA" placeholder="a ≥ 0" step="any" min="0" oninput="divideSqrt()">
                            <span style="font-size:1.8rem;">÷</span>
                            <input type="number" id="valB" placeholder="b > 0" step="any" min="0.0001" oninput="divideSqrt()">
                        </div>
                        <button onclick="divideSqrt()">Chia căn</button>`;
            }
            // --- Dạng 9: Chia căn bậc ba ---
            else if (type === 'divide3') {
                html = `<div class="note">∛a / ∛b = ∛(a/b) (b ≠ 0)</div>
                        <div class="flex-row">
                            <input type="number" id="valA" placeholder="a" step="any" oninput="divideCbrt()">
                            <span style="font-size:1.8rem;">÷</span>
                            <input type="number" id="valB" placeholder="b ≠ 0" step="any" oninput="divideCbrt()">
                        </div>
                        <button onclick="divideCbrt()">Chia căn</button>`;
            }
            // --- Dạng 10: Trục căn mẫu 1/√a (auto) ---
            else if (type === 'rational') {
                html = `<div class="note">1 / √a = √a / a &nbsp; (a > 0)</div>
                        <label>1 / √ <input type="number" id="valN" placeholder="a dương" step="any" min="0.0001" oninput="rationalize()"></label>
                        <button onclick="rationalize()">Trục căn</button>`;
            }
            // --- Dạng 11: Trục căn mẫu 1/(√a ± √b) ---
            else if (type === 'rational2') {
                html = `<div class="note">1/(√a + √b) = (√a - √b)/(a - b)<br>1/(√a - √b) = (√a + √b)/(a - b) (a,b ≥ 0, a≠b)</div>
                        <div class="flex-row">
                            <span style="font-size:1.2rem;">1 / ( √</span>
                            <input type="number" id="valA" placeholder="a ≥ 0" step="any" min="0" style="width:90px;" oninput="rationalizeSumDiff()">
                            <select id="signOp" style="width:70px; margin:0;" onchange="rationalizeSumDiff()">
                                <option value="+">+</option>
                                <option value="-">-</option>
                            </select>
                            <span style="font-size:1.2rem;">√</span>
                            <input type="number" id="valB" placeholder="b ≥ 0" step="any" min="0" style="width:90px;" oninput="rationalizeSumDiff()">
                            <span style="font-size:1.2rem;">)</span>
                        </div>
                        <button onclick="rationalizeSumDiff()">Trục căn</button>`;
            }
            // --- Dạng 12: √x = a (auto) ---
            else if (type === 'eq1') {
                html = `<div class="note">√x = a (a ≥ 0) → x = a²</div>
                        <label>√x = <input type="number" id="valA" placeholder="a ≥ 0" step="any" min="0" oninput="solveEq1()"></label>
                        <button onclick="solveEq1()">Tìm x</button>`;
            }
            // --- Dạng 13: √(ax+b)=c ---
            else if (type === 'eq2') {
                html = `<div class="note">√(a·x + b) = c (c ≥ 0) → x = (c² - b)/a (a ≠ 0)</div>
                        <div class="flex-row">
                            <input type="number" id="paramA" placeholder="a" step="any" oninput="solveEq2()">
                            <span style="font-weight:bold;">x +</span>
                            <input type="number" id="paramB" placeholder="b" step="any" oninput="solveEq2()">
                        </div>
                        <div style="margin-top:0.8rem;">= c &nbsp; với c = 
                            <input type="number" id="paramC" placeholder="c ≥ 0" step="any" min="0" style="width:100px;" oninput="solveEq2()">
                        </div>
                        <button onclick="solveEq2()" style="margin-top:1.2rem;">Giải</button>`;
            }

            formArea.innerHTML = html;

            // Tự động chạy lần đầu nếu có giá trị mặc định
            setTimeout(() => {
                if (type === 'add' || type === 'multiply' || type === 'multiply3' || type === 'divide' || type === 'divide3' || type === 'rational2' || type === 'eq2') {
                    // Gọi hàm tương ứng để hiển thị kết quả với giá trị mặc định
                    if (type === 'add') window.addRoots();
                    else if (type === 'multiply') window.multiplySqrt();
                    else if (type === 'multiply3') window.multiplyCbrt();
                    else if (type === 'divide') window.divideSqrt();
                    else if (type === 'divide3') window.divideCbrt();
                    else if (type === 'rational2') window.rationalizeSumDiff();
                    else if (type === 'eq2') window.solveEq2();
                } else {
                    // Các dạng đã có oninput, tự kích hoạt nếu có giá trị
                    const input = formArea.querySelector('input[oninput]');
                    if (input && input.value.trim() !== '') {
                        input.dispatchEvent(new Event('input', { bubbles: true }));
                    }
                }
            }, 20);
        };

        // ----- HÀM TÍNH TOÁN (KHÔNG ICON LỖI) -----
        window.showResult = function(text) {
            resultEl.innerHTML = text;
        };

        window.calcSqrt2 = function() {
            const n = parseFloat(document.getElementById('valN')?.value);
            if (isNaN(n)) { resultEl.innerHTML = ''; return; }
            if (n < 0) return showResult('Không có căn bậc hai thực của số âm');
            showResult(`√${n} = ${Math.sqrt(n)}`);
        };

        window.calcSqrt3 = function() {
            const n = parseFloat(document.getElementById('valN')?.value);
            if (isNaN(n)) { resultEl.innerHTML = ''; return; }
            showResult(`∛${n} = ${Math.cbrt(n)}`);
        };

        window.simplifySqrt = function() {
            let n = parseInt(document.getElementById('valN')?.value, 10);
            if (isNaN(n) || n <= 0) { resultEl.innerHTML = ''; return; }
            let outside = 1, inside = n;
            for (let i = 2; i * i <= inside; i++) {
                while (inside % (i * i) === 0) {
                    outside *= i;
                    inside /= (i * i);
                }
            }
            if (inside === 1) showResult(`√${n} = ${outside}`);
            else if (outside === 1) showResult(`√${n} = √${inside}`);
            else showResult(`√${n} = ${outside}√${inside}`);
        };

        window.simplifyCbrt = function() {
            let n = parseInt(document.getElementById('valN')?.value, 10);
            if (isNaN(n)) { resultEl.innerHTML = ''; return; }
            let sign = n < 0 ? -1 : 1;
            n = Math.abs(n);
            let outside = 1, inside = n;
            for (let i = 2; i * i * i <= inside; i++) {
                while (inside % (i * i * i) === 0) {
                    outside *= i;
                    inside /= (i * i * i);
                }
            }
            outside *= sign;
            if (inside === 1) showResult(`∛${sign * n} = ${outside}`);
            else if (outside === 1) showResult(`∛${sign * n} = ∛${inside}`);
            else if (outside === -1) showResult(`∛${sign * n} = -∛${inside}`);
            else showResult(`∛${sign * n} = ${outside}∛${inside}`);
        };

        window.addRoots = function() {
            const a = parseFloat(document.getElementById('coef1')?.value);
            const b = parseFloat(document.getElementById('coef2')?.value);
            if (isNaN(a) || isNaN(b)) { resultEl.innerHTML = ''; return; }
            showResult(`${a}√x + ${b}√x = ${a + b}√x`);
        };

        window.multiplySqrt = function() {
            const a = parseFloat(document.getElementById('valA')?.value);
            const b = parseFloat(document.getElementById('valB')?.value);
            if (isNaN(a) || isNaN(b)) { resultEl.innerHTML = ''; return; }
            if (a < 0 || b < 0) return showResult('a, b phải ≥ 0');
            showResult(`√${a} × √${b} = √${a * b} = ${Math.sqrt(a * b)}`);
        };

        window.multiplyCbrt = function() {
            const a = parseFloat(document.getElementById('valA')?.value);
            const b = parseFloat(document.getElementById('valB')?.value);
            if (isNaN(a) || isNaN(b)) { resultEl.innerHTML = ''; return; }
            showResult(`∛${a} × ∛${b} = ∛${a * b} = ${Math.cbrt(a * b)}`);
        };

        window.divideSqrt = function() {
            const a = parseFloat(document.getElementById('valA')?.value);
            const b = parseFloat(document.getElementById('valB')?.value);
            if (isNaN(a) || isNaN(b)) { resultEl.innerHTML = ''; return; }
            if (a < 0) return showResult('a ≥ 0');
            if (b <= 0) return showResult('b > 0');
            showResult(`√${a} / √${b} = √${a / b} = ${Math.sqrt(a / b)}`);
        };

        window.divideCbrt = function() {
            const a = parseFloat(document.getElementById('valA')?.value);
            const b = parseFloat(document.getElementById('valB')?.value);
            if (isNaN(a) || isNaN(b)) { resultEl.innerHTML = ''; return; }
            if (b === 0) return showResult('b ≠ 0');
            showResult(`∛${a} / ∛${b} = ∛${a / b} = ${Math.cbrt(a / b)}`);
        };

        window.rationalize = function() {
            const n = parseFloat(document.getElementById('valN')?.value);
            if (isNaN(n) || n <= 0) { resultEl.innerHTML = ''; return; }
            showResult(`1/√${n} = √${n} / ${n} = ${Math.sqrt(n)}/${n}`);
        };

        window.rationalizeSumDiff = function() {
            const a = parseFloat(document.getElementById('valA')?.value);
            const b = parseFloat(document.getElementById('valB')?.value);
            const op = document.getElementById('signOp')?.value;
            if (isNaN(a) || isNaN(b)) { resultEl.innerHTML = ''; return; }
            if (a < 0 || b < 0) return showResult('a, b ≥ 0');
            if (a === b) return showResult('Mẫu số bằng 0 (a = b)');
            let res;
            if (op === '+') {
                res = `(√${a} - √${b}) / (${a} - ${b})`;
            } else {
                res = `(√${a} + √${b}) / (${a} - ${b})`;
            }
            showResult(`1/(√${a} ${op} √${b}) = ${res}`);
        };

        window.solveEq1 = function() {
            const a = parseFloat(document.getElementById('valA')?.value);
            if (isNaN(a)) { resultEl.innerHTML = ''; return; }
            if (a < 0) return showResult('Vô nghiệm (a < 0)');
            showResult(`√x = ${a}  →  x = ${a * a}`);
        };

        window.solveEq2 = function() {
            const a = parseFloat(document.getElementById('paramA')?.value);
            const b = parseFloat(document.getElementById('paramB')?.value);
            const c = parseFloat(document.getElementById('paramC')?.value);
            if (isNaN(a) || isNaN(b) || isNaN(c)) { resultEl.innerHTML = ''; return; }
            if (a === 0) return showResult('Hệ số a phải khác 0');
            if (c < 0) return showResult('Vô nghiệm (c < 0)');
            const x = (c * c - b) / a;
            showResult(`√(${a}x + ${b}) = ${c}  →  x = ${x}`);
        };

        window.onload = function() {
            renderForm();
        };
    })();
</script>
</body>
</html>