



















file_source = FileDataSource("data.txt")
print(file_source.read_data())

database_source = DatabaseDataSource("database_connection_string")
database_adapter = DatabaseAdapter(database_source)
print(database_adapter.read_data())