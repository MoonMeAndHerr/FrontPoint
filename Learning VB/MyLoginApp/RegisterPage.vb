Imports System.Data.OleDb
Imports Microsoft.VisualBasic.ApplicationServices

Public Class RegisterPage
    Private Sub btnRegister_Click(sender As Object, e As EventArgs) Handles btnRegister.Click
        Dim connStr As String = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=" & Application.StartupPath & "\UserDB.accdb;"
        Using conn As New OleDbConnection(connStr)
            conn.Open()

            ' Optional: Check if username exists
            Dim checkCmd As New OleDbCommand("SELECT COUNT(*) FROM Users WHERE Email = ?", conn)
            checkCmd.Parameters.AddWithValue("?", txtEmail.Text)
            Dim exists As Integer = Convert.ToInt32(checkCmd.ExecuteScalar())

            If exists > 0 Then
                MessageBox.Show("Username already exists.")
                conn.Close()
                Exit Sub
            End If

            ' Actual Insert
            Dim insertCmd As New OleDbCommand("INSERT INTO Users (Email, [Password]) VALUES (?, ?)", conn)
            insertCmd.Parameters.AddWithValue("?", txtEmail.Text)
            insertCmd.Parameters.AddWithValue("?", txtPassword.Text)
            insertCmd.ExecuteNonQuery()

            MessageBox.Show("Registration successful.")
            conn.Close()
        End Using
    End Sub

End Class