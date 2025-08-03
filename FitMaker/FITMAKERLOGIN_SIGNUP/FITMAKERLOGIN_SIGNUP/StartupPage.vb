Public Class StartupPage
    Private Sub btnUTPStudent_Click(sender As Object, e As EventArgs) Handles btnUTPStudent.Click
        Me.Hide()
        Dim loginUTPForm As New LoginUTP()
        loginUTPForm.Show()
    End Sub

    Private Sub btnPublicUser_Click(sender As Object, e As EventArgs) Handles btnPublicUser.Click
        Me.Hide()
        Dim loginPublicForm As New LoginPublic()
        loginPublicForm.Show()
    End Sub

    Private Sub StartupPage_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub
End Class
