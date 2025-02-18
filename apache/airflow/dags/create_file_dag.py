import os
from airflow import DAG
from airflow.operators.python import PythonOperator
from datetime import datetime, timedelta  # 確保這裡也導入 timedelta

def create_file():
    file_path = '/opt/airflow/1'  # 檔案路徑
    with open(file_path, 'w') as f:
        f.write('這是用 DAG 創建的檔案！')
    print(f"檔案 {file_path} 已經創建！")

default_args = {
    'owner': 'airflow',
    'start_date': datetime(2024, 1, 1),
    'retries': 1,
    'retry_delay': timedelta(minutes=5),  # 使用 timedelta 來設定重試延遲
}

with DAG(
    'create_file_dag',
    default_args=default_args,
    schedule_interval=None,  # 這個 DAG 不會自動執行
    catchup=False,
) as dag:

    create_file_task = PythonOperator(
        task_id='create_file_task',
        python_callable=create_file,
    )

create_file_task
