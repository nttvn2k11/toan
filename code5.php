<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Hình học</title>
    <style>
        /* NỀN TRẮNG, TIMES NEW ROMAN – nhưng cho phép màu xanh trên nút */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #ffffff;
            font-family: 'Times New Roman', Times, serif;
            color: #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 24px 16px;
            line-height: 1.55;
        }
        .container {
            max-width: 1100px;
            width: 100%;
            background: white;
            padding: 25px 20px;
            border: none;
            box-shadow: none;
        }
        h1 {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 15px;
            letter-spacing: 1px;
        }

        /* ===== MENU XANH – màu mè, vẫn thanh lịch ===== */
        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 35px;
        }
        .menu button {
            background: #e6f4ff;      /* xanh nhạt tinh tế */
            border: 1.5px solid #006699;
            padding: 10px 18px;
            font-size: 16.5px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 600;
            cursor: pointer;
            transition: 0.1s ease;
            color: #002b4a;
            border-radius: 0;           /* vuông, giữ nét học thuật */
            letter-spacing: 0.3px;
        }
        .menu button:hover {
            background: #b8e2ff;        /* xanh đậm hơn khi rê */
            border-color: #004c80;
            color: #001f33;
        }
        .menu button.active {
            background: #006699;        /* xanh đậm – active */
            border-color: #003d66;
            color: white;
            font-weight: bold;
        }

        /* NỘI DUNG CHÍNH – căn giữa */
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        .problem-box {
            width: 100%;
            text-align: center;
            font-size: 20px;
            font-weight: 650;
            margin: 10px 0 20px 0;
            border-bottom: 1px solid #333;
            padding-bottom: 10px;
        }
        .input-area {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: baseline;
            gap: 30px;
            margin: 15px 0 25px 0;
            background: white;
            padding: 18px 22px;
            border: 1px solid black;
        }
        .input-group {
            display: flex;
            align-items: baseline;
            gap: 8px;
        }
        .input-group label {
            font-size: 18px;
            font-weight: 600;
        }
        .input-group input {
            width: 95px;
            padding: 8px 10px;
            font-size: 17px;
            border: 1px solid black;
            background: white;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }

        /* NÚT "GIẢI TỪNG BƯỚC" – tô xanh đồng bộ */
        .btn-giai {
            background: #cce5ff;        /* xanh nhạt */
            border: 2px solid #006699;
            padding: 12px 38px;
            font-size: 20px;
            font-weight: bold;
            margin: 10px 0 25px 0;
            cursor: pointer;
            transition: 0.1s;
            letter-spacing: 1.5px;
            color: #002b4a;
        }
        .btn-giai:hover {
            background: #99c2ff;        /* xanh đậm hơn */
            border-color: #004c80;
            color: #001a33;
        }

        .canvas-container {
            display: flex;
            justify-content: center;
            margin: 15px 0 30px 0;
        }
        canvas {
            border: 1px solid #222;
            background: white;
            width: 100%;
            height: auto;
            max-width: 500px;
        }
        .solution {
            width: 100%;
            text-align: left;
            margin-top: 35px;
            border-top: 2.5px solid black;
            padding-top: 28px;
        }
        .step {
            margin-bottom: 28px;
        }
        .step-title {
            font-weight: bold;
            text-decoration: underline;
            font-size: 19px;
            margin-bottom: 8px;
        }
        .step-content {
            font-size: 18px;
            margin-left: 18px;
            white-space: pre-wrap;
            word-break: break-word;
        }

        @media (max-width: 700px) {
            .container { padding: 15px; }
            .menu button { width: 100%; max-width: 300px; }
            .input-area { flex-direction: column; align-items: center; gap: 18px; }
        }

        /* Tuyệt đối không icon, không emoji – chỉ chữ và màu xanh */
    </style>
</head>
<body>
    <div class="container">
        <h1>Hình học</h1>

        <!-- MENU 10 CHUYÊN ĐỀ – với hiệu ứng active xanh -->
        <div class="menu" id="menu"></div>

        <!-- KHU VỰC HIỂN THỊ BÀI TOÁN, INPUT, CANVAS, LỜI GIẢI -->
        <div class="content" id="content"></div>
    </div>

    <script>
        (function () {
            "use strict";

            // ---------- ĐỊNH NGHĨA 10 DẠNG TOÁN (giữ nguyên nội dung) ----------
            const topics = [
                {
                    id: 1,
                    name: "1. Hệ thức lượng trong tam giác vuông (Pythagore, sin, cos, tan)",
                    inputs: [
                        {label: "Cạnh góc vuông a (cm)", name: "a", default: 3.0},
                        {label: "Cạnh góc vuông b (cm)", name: "b", default: 4.0}
                    ],
                    solve: solveTamGiacVuong,
                    draw: drawTamGiacVuong
                },
                {
                    id: 2,
                    name: "2. Đường tròn – Chu vi, diện tích, cung, quạt, góc nội tiếp, tiếp tuyến",
                    inputs: [
                        {label: "Bán kính R (cm)", name: "R", default: 5.0},
                        {label: "Góc ở tâm n (độ)", name: "n", default: 60.0},
                        {label: "Khoảng cách OM (cm)", name: "d", default: 13.0}
                    ],
                    solve: solveDuongTron,
                    draw: drawDuongTron
                },
                {
                    id: 3,
                    name: "3. Tứ giác nội tiếp – Điều kiện tổng góc đối = 180°",
                    inputs: [
                        {label: "Góc A (độ)", name: "gocA", default: 80},
                        {label: "Góc C (độ)", name: "gocC", default: 100}
                    ],
                    solve: solveTuGiacNoiTiep,
                    draw: drawTuGiacNoiTiep
                },
                {
                    id: 4,
                    name: "4. Đường tròn ngoại tiếp tam giác – Bán kính R",
                    inputs: [
                        {label: "Cạnh a (cm)", name: "a", default: 6.0},
                        {label: "Cạnh b (cm)", name: "b", default: 7.0},
                        {label: "Cạnh c (cm)", name: "c", default: 8.0}
                    ],
                    solve: solveNgoaiTiep,
                    draw: drawTamGiacABC
                },
                {
                    id: 5,
                    name: "5. Đường tròn nội tiếp tam giác – Bán kính r",
                    inputs: [
                        {label: "Cạnh a (cm)", name: "a", default: 6.0},
                        {label: "Cạnh b (cm)", name: "b", default: 7.0},
                        {label: "Cạnh c (cm)", name: "c", default: 8.0}
                    ],
                    solve: solveNoiTiep,
                    draw: drawTamGiacABC
                },
                {
                    id: 6,
                    name: "6. Tam giác đều – Chu vi, diện tích",
                    inputs: [
                        {label: "Cạnh a (cm)", name: "a", default: 6.0}
                    ],
                    solve: solveTamGiacDeu,
                    draw: drawTamGiacDeu
                },
                {
                    id: 7,
                    name: "7. Đa giác đều (lục giác đều) – Chu vi, diện tích",
                    inputs: [
                        {label: "Số cạnh n", name: "n", default: 6},
                        {label: "Độ dài cạnh a (cm)", name: "a", default: 5.0}
                    ],
                    solve: solveDaGiacDeu,
                    draw: drawLucGiacDeu
                },
                {
                    id: 8,
                    name: "8. Hình trụ – Diện tích xq, tp, thể tích",
                    inputs: [
                        {label: "Bán kính R (cm)", name: "R", default: 4.0},
                        {label: "Chiều cao h (cm)", name: "h", default: 7.0}
                    ],
                    solve: solveHinhTru,
                    draw: drawHinhTru
                },
                {
                    id: 9,
                    name: "9. Hình nón – Diện tích xq, thể tích (đường sinh)",
                    inputs: [
                        {label: "Bán kính R (cm)", name: "R", default: 4.0},
                        {label: "Chiều cao h (cm)", name: "h", default: 6.0}
                    ],
                    solve: solveHinhNon,
                    draw: drawHinhNon
                },
                {
                    id: 10,
                    name: "10. Hình cầu – Diện tích mặt cầu, thể tích",
                    inputs: [
                        {label: "Bán kính R (cm)", name: "R", default: 5.0}
                    ],
                    solve: solveHinhCau,
                    draw: drawHinhCau
                }
            ];

            // ---------- HÀM XỬ LÝ ACTIVE MENU (màu xanh đậm) ----------
            function setActiveTopic(topicId) {
                const allMenuBtns = document.querySelectorAll('.menu button');
                allMenuBtns.forEach(btn => {
                    btn.classList.remove('active');
                    if (parseInt(btn.dataset.topicId) === topicId) {
                        btn.classList.add('active');
                    }
                });
            }

            // ---------- TẠO MENU VỚI MÀU XANH + ACTIVE ----------
            function buildMenu() {
                const menuDiv = document.getElementById("menu");
                menuDiv.innerHTML = "";
                topics.forEach(topic => {
                    const btn = document.createElement("button");
                    btn.textContent = topic.name;
                    btn.dataset.topicId = topic.id;
                    // sự kiện click: active + render
                    btn.addEventListener("click", function (e) {
                        setActiveTopic(topic.id);
                        renderTopic(topic.id);
                    });
                    menuDiv.appendChild(btn);
                });

                // Mặc định active topic 1 (Hệ thức lượng)
                setActiveTopic(1);
            }

            // ---------- RENDER GIAO DIỆN CHO DẠNG ĐÃ CHỌN (giữ nguyên logic) ----------
            function renderTopic(topicId) {
                const topic = topics.find(t => t.id === topicId);
                if (!topic) return;

                let html = `<div class="problem-box" id="problemStatement">Bài toán: </div>`;

                // Tạo vùng nhập liệu
                html += `<div class="input-area" id="inputArea">`;
                topic.inputs.forEach(inp => {
                    html += `<div class="input-group">
                        <label>${inp.label}:</label>
                        <input type="number" id="${inp.name}" value="${inp.default}" step="any" min="0.001">
                      </div>`;
                });
                html += `</div>`;

                // Nút giải (đã có màu xanh qua CSS)
                html += `<button class="btn-giai" id="btnGiai">Giải</button>`;
                html += `<div class="canvas-container"><canvas id="myCanvas" width="480" height="380"></canvas></div>`;

                // Khung lời giải 4 bước
                html += `<div class="solution" id="solutionPanel">
                      <div class="step"><span class="step-title">1. Công thức áp dụng:</span><div class="step-content" id="congThuc"></div></div>
                      <div class="step"><span class="step-title">2. Thay số:</span><div class="step-content" id="thaySo"></div></div>
                      <div class="step"><span class="step-title">3. Tính toán (chi tiết từng phép tính):</span><div class="step-content" id="tinhToan"></div></div>
                      <div class="step"><span class="step-title">4. Kết luận:</span><div class="step-content" id="ketLuan"></div></div>
                   </div>`;

                contentDiv.innerHTML = html;

                // Cập nhật đề bài theo số mặc định
                updateProblemStatement(topic);

                // Gán sự kiện cho nút giải
                document.getElementById("btnGiai").addEventListener("click", function () {
                    solveTopic(topic);
                });

                // Vẽ hình lần đầu
                setTimeout(() => {
                    drawTopic(topic);
                }, 15);
            }

            // Cập nhật nội dung "Bài toán:"
            function updateProblemStatement(topic) {
                const inputs = topic.inputs.map(inp => {
                    const val = document.getElementById(inp.name)?.value || inp.default;
                    return `${inp.label.split(' ')[0]} = ${val}`;
                }).join(', ');
                const probElem = document.getElementById("problemStatement");
                if (probElem) probElem.innerHTML = `Bài toán: ${topic.name} — ${inputs}`;
            }

            // ---------- HÀM GIẢI TỔNG QUÁT ----------
            function solveTopic(topic) {
                updateProblemStatement(topic);
                const result = topic.solve();
                document.getElementById("congThuc").innerHTML = result.congThuc || "";
                document.getElementById("thaySo").innerHTML = result.thaySo || "";
                document.getElementById("tinhToan").innerHTML = result.tinhToan || "";
                document.getElementById("ketLuan").innerHTML = result.ketLuan || "";
                drawTopic(topic);
            }

            function drawTopic(topic) {
                topic.draw();
            }

            // ******************** CÁC HÀM GIẢI CHI TIẾT (giữ nguyên hoàn toàn) ********************
            // 1. TAM GIÁC VUÔNG
            function solveTamGiacVuong() {
                const a = parseFloat(document.getElementById("a")?.value) || 3;
                const b = parseFloat(document.getElementById("b")?.value) || 4;
                const c = Math.sqrt(a * a + b * b);
                const sinB = b / c, cosB = a / c, tanB = b / a;
                const congThuc = `• Định lý Pythagore: c² = a² + b²  →  c = √(a² + b²)\n• Tỉ số lượng giác góc nhọn B (đối = b, kề = a, huyền = c):\n   sin B = đối/huyền = b/c\n   cos B = kề/huyền = a/c\n   tan B = đối/kề = b/a`;
                const thaySo = `a = ${a} cm, b = ${b} cm\n→ c² = ${a}² + ${b}² = ${a * a} + ${b * b} = ${a * a + b * b}\n   sin B = ${b} / c, cos B = ${a} / c, tan B = ${b} / ${a}`;
                const tinhToan = `c = √(${a * a + b * b}) = √${a * a + b * b}\n   = ${c.toFixed(4)} (làm tròn) → c ≈ ${c.toFixed(3)} cm\n\nsin B = ${b} / ${c.toFixed(4)} = ${(b / c).toFixed(6)} ≈ ${sinB.toFixed(3)}\ncos B = ${a} / ${c.toFixed(4)} = ${(a / c).toFixed(6)} ≈ ${cosB.toFixed(3)}\ntan B = ${b} / ${a} = ${(b / a).toFixed(6)} ≈ ${tanB.toFixed(3)}`;
                const ketLuan = `- Cạnh huyền BC = ${c.toFixed(2)} cm.\n- sin B ≈ ${sinB.toFixed(3)} ; cos B ≈ ${cosB.toFixed(3)} ; tan B ≈ ${tanB.toFixed(3)}.`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawTamGiacVuong() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                const a = parseFloat(document.getElementById("a")?.value) || 3;
                const b = parseFloat(document.getElementById("b")?.value) || 4;
                const scale = 30;
                const A = [120, 300], B = [120 + a * scale, 300], C = [120, 300 - b * scale];
                ctx.beginPath();
                ctx.moveTo(...A);
                ctx.lineTo(...B);
                ctx.lineTo(...C);
                ctx.closePath();
                ctx.stroke();
                ctx.font = "18px Times New Roman";
                ctx.fillStyle = "#000";
                ctx.fillText("A", A[0] - 25, A[1] + 5);
                ctx.fillText("B", B[0] + 8, B[1] + 5);
                ctx.fillText("C", C[0] - 25, C[1] - 10);
                ctx.beginPath();
                ctx.moveTo(A[0], A[1]);
                ctx.lineTo(A[0] + 12, A[1]);
                ctx.moveTo(A[0], A[1] - 12);
                ctx.lineTo(A[0], A[1]);
                ctx.stroke();
            }
            // 2. ĐƯỜNG TRÒN
            function solveDuongTron() {
                const R = parseFloat(document.getElementById("R")?.value) || 5;
                const n = parseFloat(document.getElementById("n")?.value) || 60;
                const d = parseFloat(document.getElementById("d")?.value) || 13;
                const pi = Math.PI;
                const C = 2 * pi * R, S = pi * R * R, l = pi * R * n / 180, Sq = pi * R * R * n / 360, gnt = n / 2;
                const tiepTuyen = (d > R) ? Math.sqrt(d * d - R * R) : 0;
                const congThuc = `CHU VI: C = 2πR\nDIỆN TÍCH: S = πR²\nĐỘ DÀI CUNG n°: l = πRn/180\nDIỆN TÍCH QUẠT n°: Sq = πR²n/360\nGÓC NỘI TIẾP chắn cung n° = n/2\nTIẾP TUYẾN (độ dài từ M ngoài đường tròn): MT = √(d² - R²) (với OM = d)`;
                const thaySo = `R = ${R} cm, n = ${n}°, d = ${d} cm (OM)`;
                const tinhToan = `C = 2·π·${R} = 2·3.14159·${R} ≈ ${(2 * pi * R).toFixed(4)} → ≈ ${C.toFixed(3)} cm\nS = π·${R}² = 3.14159·${R * R} ≈ ${S.toFixed(4)} → ≈ ${S.toFixed(3)} cm²\nl = π·${R}·${n}/180 = 3.14159·${R}·${n}/180 ≈ ${l.toFixed(4)} → ≈ ${l.toFixed(3)} cm\nSq = π·${R}²·${n}/360 = 3.14159·${R * R}·${n}/360 ≈ ${Sq.toFixed(4)} → ≈ ${Sq.toFixed(3)} cm²\nGóc nội tiếp = ${n}/2 = ${gnt}°\nTiếp tuyến: √(${d}² - ${R}²) = √(${d * d - R * R}) = ${tiepTuyen.toFixed(4)} → ≈ ${tiepTuyen.toFixed(3)} cm`;
                const ketLuan = `- Chu vi ≈ ${C.toFixed(2)} cm ; Diện tích ≈ ${S.toFixed(2)} cm²\n- Độ dài cung ${n}° ≈ ${l.toFixed(2)} cm\n- Diện tích quạt ${n}° ≈ ${Sq.toFixed(2)} cm²\n- Góc nội tiếp = ${gnt}°\n- Độ dài tiếp tuyến ≈ ${tiepTuyen.toFixed(2)} cm (nếu d > R)`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawDuongTron() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                const R = parseFloat(document.getElementById("R")?.value) || 5;
                const scale = 18;
                ctx.beginPath();
                ctx.arc(240, 190, R * scale, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.font = "18px Times New Roman";
                ctx.fillText("O", 225, 170);
                ctx.fillText("R = " + R, 270, 140);
            }
            // 3. TỨ GIÁC NỘI TIẾP
            function solveTuGiacNoiTiep() {
                const A = parseFloat(document.getElementById("gocA")?.value) || 80;
                const C = parseFloat(document.getElementById("gocC")?.value) || 100;
                const tong = A + C;
                const congThuc = `Điều kiện tứ giác ABCD nội tiếp: ∠A + ∠C = 180° (hoặc ∠B + ∠D = 180°).`;
                const thaySo = `∠A = ${A}°, ∠C = ${C}° → Tổng = ${A} + ${C} = ${tong}°`;
                const tinhToan = `So sánh: ${tong}°  với 180°.\n→ ${tong === 180 ? 'BẰNG' : (tong > 180 ? 'LỚN HƠN' : 'NHỎ HƠN')} 180°.`;
                const ketLuan = tong === 180 ? `Tứ giác ABCD nội tiếp được đường tròn.` : `Tứ giác ABCD KHÔNG nội tiếp đường tròn.`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawTuGiacNoiTiep() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                ctx.beginPath();
                ctx.arc(240, 190, 130, 0, 2 * Math.PI);
                ctx.strokeStyle = "#aaa";
                ctx.stroke();
                ctx.strokeStyle = "#000";
                ctx.beginPath();
                ctx.moveTo(160, 100);
                ctx.lineTo(330, 100);
                ctx.lineTo(330, 260);
                ctx.lineTo(160, 260);
                ctx.closePath();
                ctx.stroke();
                ctx.font = "18px Times New Roman";
                ctx.fillText("A", 140, 80);
                ctx.fillText("B", 340, 80);
                ctx.fillText("C", 340, 280);
                ctx.fillText("D", 140, 280);
            }
            // 4. NGOẠI TIẾP
            function solveNgoaiTiep() {
                let a = parseFloat(document.getElementById("a")?.value) || 6, b = parseFloat(document.getElementById("b")?.value) || 7, c = parseFloat(document.getElementById("c")?.value) || 8;
                let p = (a + b + c) / 2;
                let S = Math.sqrt(p * (p - a) * (p - b) * (p - c));
                let R = (a * b * c) / (4 * S);
                const congThuc = `Bán kính đường tròn ngoại tiếp tam giác: R = (a·b·c) / (4S)\nDiện tích tam giác (Heron): S = √[p(p-a)(p-b)(p-c)] với p = (a+b+c)/2`;
                const thaySo = `a = ${a} cm, b = ${b} cm, c = ${c} cm\np = (${a}+${b}+${c})/2 = ${p.toFixed(3)} cm\nS = √[${p.toFixed(3)}·(${p.toFixed(3)}-${a})·(${p.toFixed(3)}-${b})·(${p.toFixed(3)}-${c})]`;
                const tinhToan = `p = ${(a + b + c) / 2} = ${p.toFixed(3)} cm\n(p-a)=${(p - a).toFixed(3)}; (p-b)=${(p - b).toFixed(3)}; (p-c)=${(p - c).toFixed(3)}\nS = √(${p.toFixed(3)}·${(p - a).toFixed(3)}·${(p - b).toFixed(3)}·${(p - c).toFixed(3)}) = √${(p * (p - a) * (p - b) * (p - c)).toFixed(4)} = ${S.toFixed(4)} → S ≈ ${S.toFixed(3)} cm²\nR = (${a}·${b}·${c}) / (4·${S.toFixed(4)}) = ${a * b * c} / ${(4 * S).toFixed(4)} = ${R.toFixed(4)} → R ≈ ${R.toFixed(3)} cm`;
                const ketLuan = `Bán kính đường tròn ngoại tiếp R ≈ ${R.toFixed(2)} cm.`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            // 5. NỘI TIẾP
            function solveNoiTiep() {
                let a = parseFloat(document.getElementById("a")?.value) || 6, b = parseFloat(document.getElementById("b")?.value) || 7, c = parseFloat(document.getElementById("c")?.value) || 8;
                let p = (a + b + c) / 2;
                let S = Math.sqrt(p * (p - a) * (p - b) * (p - c));
                let r = S / p;
                const congThuc = `Bán kính đường tròn nội tiếp: r = S / p , với p là nửa chu vi, S là diện tích (Heron).`;
                const thaySo = `a = ${a}, b = ${b}, c = ${c}\np = (${a}+${b}+${c})/2 = ${p.toFixed(3)} cm\nS = √[p(p-a)(p-b)(p-c)] = √[${p.toFixed(3)}·(${p.toFixed(3)}-${a})·(${p.toFixed(3)}-${b})·(${p.toFixed(3)}-${c})]`;
                const tinhToan = `p = ${p.toFixed(3)} cm\nTích p(p-a)(p-b)(p-c) = ${(p * (p - a) * (p - b) * (p - c)).toFixed(4)} → S = √(...) = ${S.toFixed(4)} ≈ ${S.toFixed(3)} cm²\nr = S / p = ${S.toFixed(4)} / ${p.toFixed(4)} = ${(S / p).toFixed(4)} ≈ ${r.toFixed(3)} cm`;
                const ketLuan = `Bán kính đường tròn nội tiếp r ≈ ${r.toFixed(2)} cm.`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawTamGiacABC() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                ctx.beginPath();
                ctx.moveTo(160, 300);
                ctx.lineTo(380, 300);
                ctx.lineTo(220, 110);
                ctx.closePath();
                ctx.stroke();
                ctx.font = "18px Times New Roman";
                ctx.fillText("A", 200, 90);
                ctx.fillText("B", 400, 300);
                ctx.fillText("C", 140, 290);
            }
            // 6. TAM GIÁC ĐỀU
            function solveTamGiacDeu() {
                const a = parseFloat(document.getElementById("a")?.value) || 6;
                const P = 3 * a, S = (Math.sqrt(3) / 4) * a * a;
                const congThuc = `Chu vi tam giác đều: P = 3a\nDiện tích tam giác đều: S = (a²√3)/4`;
                const thaySo = `a = ${a} cm\nP = 3·${a} = ${3 * a}\nS = (${a}²·√3)/4 = (${a * a}·1.7320508)/4`;
                const tinhToan = `P = ${P} cm\nS = (${a * a}·1.7320508)/4 = ${(a * a * Math.sqrt(3)) / 4} ≈ ${S.toFixed(3)} cm²`;
                const ketLuan = `Chu vi tam giác đều = ${P} cm, diện tích ≈ ${S.toFixed(2)} cm².`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawTamGiacDeu() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                const a = parseFloat(document.getElementById("a")?.value) || 6;
                const h = a * Math.sqrt(3) / 2;
                const scale = 18;
                ctx.beginPath();
                ctx.moveTo(150, 300);
                ctx.lineTo(150 + a * scale, 300);
                ctx.lineTo(150 + (a * scale / 2), 300 - h * scale);
                ctx.closePath();
                ctx.stroke();
                ctx.fillText("A", 140, 280);
                ctx.fillText("B", 150 + a * scale + 5, 300);
                ctx.fillText("C", 150 + (a * scale / 2) - 10, 300 - h * scale - 5);
            }
            // 7. ĐA GIÁC ĐỀU
            function solveDaGiacDeu() {
                let n = parseInt(document.getElementById("n")?.value) || 6;
                let a = parseFloat(document.getElementById("a")?.value) || 5;
                let P = n * a;
                let S = (n * a * a) / (4 * Math.tan(Math.PI / n));
                const congThuc = `Chu vi đa giác đều n cạnh: P = n·a\nDiện tích đa giác đều: S = (n·a²) / (4·tan(π/n))`;
                const thaySo = `n = ${n}, a = ${a} cm\nP = ${n}·${a} = ${n * a}\nS = (${n}·${a}²) / (4·tan(180°/${n})) = (${n * a * a}) / (4·tan(${(180 / n).toFixed(2)}°))`;
                const tinhToan = `P = ${P} cm\ntan(π/${n}) = tan(${(Math.PI / n).toFixed(6)} rad) = ${Math.tan(Math.PI / n).toFixed(6)}\nS = (${n * a * a}) / (4·${Math.tan(Math.PI / n).toFixed(6)}) = ${(n * a * a) / (4 * Math.tan(Math.PI / n))} ≈ ${S.toFixed(3)} cm²`;
                const ketLuan = `Chu vi = ${P} cm, diện tích ≈ ${S.toFixed(2)} cm².`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawLucGiacDeu() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                const n = 6, a = parseFloat(document.getElementById("a")?.value) || 5;
                const R = a;
                ctx.beginPath();
                for (let i = 0; i < n; i++) {
                    let x = 240 + 70 * Math.cos(i * Math.PI / 3 - 0.5);
                    let y = 180 + 70 * Math.sin(i * Math.PI / 3 - 0.5);
                    if (i === 0) ctx.moveTo(x, y);
                    else ctx.lineTo(x, y);
                }
                ctx.closePath();
                ctx.stroke();
            }
            // 8. HÌNH TRỤ
            function solveHinhTru() {
                const R = parseFloat(document.getElementById("R")?.value) || 4, h = parseFloat(document.getElementById("h")?.value) || 7;
                const Sxq = 2 * Math.PI * R * h, Stp = 2 * Math.PI * R * h + 2 * Math.PI * R * R, V = Math.PI * R * R * h;
                const congThuc = `Diện tích xung quanh: Sxq = 2πRh\nDiện tích toàn phần: Stp = 2πRh + 2πR²\nThể tích: V = πR²h`;
                const thaySo = `R = ${R} cm, h = ${h} cm\nSxq = 2·π·${R}·${h}\nStp = 2·π·${R}·${h} + 2·π·${R}²\nV = π·${R}²·${h}`;
                const tinhToan = `Sxq = 2·3.14159·${R}·${h} = ${2 * Math.PI * R * h} ≈ ${Sxq.toFixed(3)} cm²\nStp = ${2 * Math.PI * R * h} + 2·3.14159·${R * R} = ${2 * Math.PI * R * h} + ${2 * Math.PI * R * R} = ${2 * Math.PI * R * h + 2 * Math.PI * R * R} ≈ ${Stp.toFixed(3)} cm²\nV = 3.14159·${R * R}·${h} = ${Math.PI * R * R * h} ≈ ${V.toFixed(3)} cm³`;
                const ketLuan = `Sxq ≈ ${Sxq.toFixed(2)} cm², Stp ≈ ${Stp.toFixed(2)} cm², V ≈ ${V.toFixed(2)} cm³.`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawHinhTru() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                ctx.ellipse(240, 120, 90, 22, 0, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.ellipse(240, 280, 90, 22, 0, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.moveTo(150, 120);
                ctx.lineTo(150, 280);
                ctx.moveTo(330, 120);
                ctx.lineTo(330, 280);
                ctx.stroke();
            }
            // 9. HÌNH NÓN
            function solveHinhNon() {
                const R = parseFloat(document.getElementById("R")?.value) || 4, h = parseFloat(document.getElementById("h")?.value) || 6;
                const l = Math.sqrt(R * R + h * h);
                const Sxq = Math.PI * R * l, V = (1 / 3) * Math.PI * R * R * h;
                const congThuc = `Đường sinh: l = √(R² + h²)\nDiện tích xung quanh: Sxq = πRl\nThể tích: V = 1/3 πR²h`;
                const thaySo = `R = ${R} cm, h = ${h} cm\nl = √(${R}² + ${h}²) = √(${R * R} + ${h * h})\nSxq = π·${R}·l\nV = 1/3·π·${R}²·${h}`;
                const tinhToan = `l = √(${R * R + h * h}) = √${(R * R + h * h).toFixed(2)} = ${l.toFixed(4)} ≈ ${l.toFixed(3)} cm\nSxq = 3.14159·${R}·${l.toFixed(4)} = ${Math.PI * R * l} ≈ ${Sxq.toFixed(3)} cm²\nV = (1/3)·3.14159·${R * R}·${h} = ${(1 / 3) * Math.PI * R * R * h} ≈ ${V.toFixed(3)} cm³`;
                const ketLuan = `Đường sinh ≈ ${l.toFixed(2)} cm, Sxq ≈ ${Sxq.toFixed(2)} cm², V ≈ ${V.toFixed(2)} cm³.`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawHinhNon() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                ctx.ellipse(240, 280, 80, 20, 0, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.moveTo(160, 280);
                ctx.lineTo(240, 90);
                ctx.lineTo(320, 280);
                ctx.stroke();
            }
            // 10. HÌNH CẦU
            function solveHinhCau() {
                const R = parseFloat(document.getElementById("R")?.value) || 5;
                const S = 4 * Math.PI * R * R, V = (4 / 3) * Math.PI * R * R * R;
                const congThuc = `Diện tích mặt cầu: S = 4πR²\nThể tích hình cầu: V = 4/3 πR³`;
                const thaySo = `R = ${R} cm\nS = 4·π·${R}² = 4·π·${R * R}\nV = 4/3·π·${R}³ = 4/3·π·${R * R * R}`;
                const tinhToan = `S = 4·3.14159·${R * R} = ${4 * Math.PI * R * R} ≈ ${S.toFixed(3)} cm²\nV = (4/3)·3.14159·${R * R * R} = ${(4 / 3) * Math.PI * R * R * R} ≈ ${V.toFixed(3)} cm³`;
                const ketLuan = `Diện tích mặt cầu ≈ ${S.toFixed(2)} cm², thể tích ≈ ${V.toFixed(2)} cm³.`;
                return {congThuc, thaySo, tinhToan, ketLuan};
            }
            function drawHinhCau() {
                const canvas = document.getElementById("myCanvas");
                if (!canvas) return;
                const ctx = canvas.getContext("2d");
                ctx.clearRect(0, 0, 480, 380);
                ctx.arc(240, 190, 70, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.ellipse(240, 190, 70, 20, 0, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.font = "18px Times New Roman";
                ctx.fillText("O", 220, 160);
            }

            // ---------- KHỞI TẠO ----------
            const contentDiv = document.getElementById("content");
            buildMenu();
            renderTopic(1);  // mặc định dạng 1
        })();
    </script>
</body>
</html>