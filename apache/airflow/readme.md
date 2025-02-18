
You: 

docker-compose apache airflow

ChatGPT: 

你想用 Docker Compose 來部署 Apache Airflow 嗎？還是你有特定的需求，例如自訂設定、連接 MySQL/MariaDB，或整合其他服務？
如果只是要快速啟動 Apache Airflow，官方提供了一個現成的 `docker-compose.yaml`，可以這樣下載並執行：
### 1. 下載官方範例 


```bash
curl -LfO 'https://airflow.apache.org/docs/apache-airflow/stable/docker-compose.yaml'
```
2. 建立 `.env` 設定檔

```bash
echo -e "AIRFLOW_UID=$(id -u)" > .env
```

### 3. 初始化 Airflow 


```bash
docker-compose up airflow-init
```

### 4. 啟動服務 


```bash
docker-compose up -d
```

這會啟動：
 
- `airflow-webserver`（UI 界面）
 
- `airflow-scheduler`（排程器）
 
- `airflow-worker`（執行任務）
 
- `airflow-init`（初始化資料庫）
 
- `postgres`（Airflow 預設的 metadata DB）

### 5. 登入 Airflow 
 
- 預設管理員帳號：

```makefile
username: airflow
password: airflow
```
 
- UI 入口：

```arduino
http://localhost:8080
```

如果你的需求比較複雜，例如：
 
- **改用 MySQL/MariaDB 而不是 PostgreSQL**
 
- **整合 Apache、Nginx 代理**
 
- **擴展 Worker 節點**
可以再深入調整 `docker-compose.yaml`。你有特定需求嗎？
