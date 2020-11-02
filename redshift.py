import psycopg2
def redshift():
    conn = psycopg2.connect(dbname='dev', host='redshift-cluster-1.cpmrep2pkzz9.us-east-1.redshift.amazonaws.com', port='5439', user='awsuser', password='Americaniche1')
    cur = conn.cursor()
    cur.execute("SELECT * FROM `Cashflow`;")
    cur.fetchall()
    cur.close()
    conn.close()

redshift();
