#include <stdio.h>
#include <mysql/mysql.h>


int main()
{
    MYSQL *conn = mysql_init(NULL);

    if (!conn)
    {
        fprintf(stderr, "mysql_init() failed\n");
        return 1;
    }
    if (mysql_real_connect(conn, "localhost", "haruma", "kjkszpj987", "Test1", 0, NULL, 0) == NULL)
    {
        fprintf(stderr, "mysql_real_connect() failed\n");
        mysql_close(conn);
        return 1;
    }
    if (mysql_query(conn, "SELECT * FROM sharshar") != 0)
    {
        fprintf(stderr, "mysql_query() failed\n");
        mysql_close(conn);
        return 1;
    }
    MYSQL_RES *result = mysql_store_result(conn);

    if (result == NULL) {
        fprintf(stderr, "mysql_store_result() failed\n");
        mysql_close(conn);
        return 1;
    }
    MYSQL_ROW row;

    while ((row = mysql_fetch_row(result)) != NULL)
    {
        for (unsigned int i = 0; i < mysql_num_fields(result); i++)
            printf("%s ", row[i]? row[i]: "NULL");
        printf("\n");
    }
    mysql_free_result(result);
    mysql_close(conn);
    return (0);
}
