Function Scripting()
    Dim rs As DAO.Recordset
    Dim ff As String
    Dim fieldType As String
    ff = "C:\Documents and Settings\XPSP3VLGen\Documenti\Structure.txt"
    Open ff For Output As #1
    Set rs = CurrentDb.OpenRecordset("f24")
    Print #1, "CREATE TABLE `f24` ("
    For x = 0 To rs.Fields.Count - 1
        Print #1, "`" & rs.Fields(x).Name; "`" & vbTab & TypeName(rs.Fields(x).Value) & "("; vbTab & rs.Fields(x).Size & ") DEFAULT NULL,"
    Next
    Print #1, ") ENGINE=InnoDB DEFAULT CHARSET=latin1;"

    Print #1, ""
    Set rs = CurrentDb.OpenRecordset("f24")
    Print #1, '$sql="SELECT ";'
    For x = 0 To rs.Fields.Count - 1
        Print #1, "$sql.=""" & rs.Fields(x).Name & ", "";"
    Next

    Close #1
    rs.Close
Set rs = Nothing
End Function
