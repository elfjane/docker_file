from airflow.models import XCom
from airflow.operators.python import PythonOperator
from airflow import DAG
from datetime import datetime

def my_task(**kwargs):
    message = "這是一個新的 DAG!"
    # 使用 XCom 傳遞訊息
    kwargs['ti'].xcom_push(key='message', value=message)

default_args = {
    'owner': 'airflow',
    'start_date': datetime(2024, 1, 1),
}

with DAG(
    'new_dag',
    default_args=default_args,
    schedule_interval="@daily",
    catchup=False,
) as dag:

    task1 = PythonOperator(
        task_id='push_message',
        python_callable=my_task,
        provide_context=True,  # 確保可以使用 kwargs
    )
